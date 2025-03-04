function mouseover(event){
    if(currentPlayer == 0){
      return;
    }
    let column = event.id[8];
    for(let i = 1; i < 8; i++){
        let element = document.getElementById("connect1" + i);
        if(i == column){
			if(currentPlayer == 1){
				element.src= "./images/topRed.png";
			}
			else{
				element.src = "./images/topYellow.png";
			}
        }
        else{
            element.src = "./images/topEmpty.png";
        }
    }
}


let grid = [[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0]];
let currentPlayer = 1;

function outOfBounds(row, col){
  return row < 0 || row > 5 || col < 0 || col > 6
}

function checkDelta(row, col, drow, dcol){
  val = grid[row][col];
  let tempConnectivity = 0;
  currentCol = col;
  currentRow = row;
  while (grid[currentRow][currentCol] == val){
    currentCol += dcol;
    currentRow += drow;
    tempConnectivity++;
    if(outOfBounds(currentRow, currentCol)){
      break;
    }
  }
  currentCol = col - dcol;
  currentRow = row - drow;
  while (grid[currentRow][currentCol] == val){
    currentCol -= dcol;
    currentRow -= drow;
    tempConnectivity++;
    if(outOfBounds(currentRow, currentCol)){
      break;
    }
  }
  return tempConnectivity;
}
function getConnectivity(row, col){
  return Math.max(checkDelta(row, col, 0, 1), checkDelta(row, col, 1, 0), checkDelta(row, col, 1, 1), checkDelta(row, col, 1, -1));
}	
function playMove(event){
  if(currentPlayer == 0){
    return;
  }
  let column = event.id[8];
	let row = -1;
	
	for(let i = 5; i >= 0; i--){
		if(grid[i][column-1] == 0){
			row = i;
			break;
		}
	}
	if(row != -1){
		let element = document.getElementById("connect"+(row+2) + column)
		grid[row][column-1] = currentPlayer;
		if(currentPlayer == 1){
			document.getElementById("connect1" + column).src = "./images/topYellow.png";
			element.src = "./images/connect4Red.png";
		}
		else{
			document.getElementById("connect1" + column).src = "./images/topRed.png";
			element.src = "./images/connect4Yellow.png";
		}
    console.log(getConnectivity(row, column-1))
    if(getConnectivity(row, column-1) >= 4){
      
      for(let i = 1; i < 8; i++){
        let element = document.getElementById("connect1" + i);
        element.src = "./images/topEmpty.png";;
      }
      let win = document.getElementById("winMsg");
      win.textContent = (currentPlayer == 1 ? "Red " : "Yellow ") + "wins!";
      currentPlayer = 0;
    }
		currentPlayer = -currentPlayer;
	}
		
}


class GridSolver {

    // tie == human win
    static Result = {
      aiWin: 0,
      humanWin: 1
    }
  
    constructor(grid) {
      this.grid = grid;
      this.realMoveCount = 0;
      this.memo = new Map();
    }
  
    // returns true if AI has won, otherwise false
    playNextMove(humanColumn) {
      this.playMove(humanColumn, Dot.Human);
      this.realMoveCount += 2; // human and our move
  
      const moves = [];
      for(let col = 0; col < 7; col++) {
        if(this.grid[0][col] !== Dot.Empty) continue;

        const row = this.playMove(col, Dot.AI);
        const score = this.getConnectivity(row, col);
        if(score >= 4) return true;
  
        const key = JSON.stringify(this.grid);
        if(this.memo.has(key)) {
          if(this.memo.get(key) === GridSolver.Result.aiWin) {
            return false;
          }
          this.unplayMove(col);
          continue;
        }
  
        this.unplayMove(col);
        if(col == 4){
            score = 99;
            //prioritize the center
        }
        moves.push([score, col]);
      }
  
      moves.sort(([score1], [score2]) => score2 - score1);
  
      for(const [score, col] of moves) {
        this.playMove(col, Dot.AI);
        if(this.gridSolve(this.realMoveCount) === GridSolver.Result.aiWin) {
          return false;
        }
        this.unplayMove(col);
      }
  
      // it's a solved game; we shouldn't get here
      return false;
    }
  
    printGrid() {
      let res = '';
      for(const r of this.grid) {
        res += '|';
        for(const v of r) {
          if(v === Dot.Empty) res += ' ';
          if(v === Dot.AI) res += 'x';
          if(v === Dot.Human) res += 'o'; 
          res += '|';
        }
        res += '\n';
      }
      res += ' ';
      for(let i = 0; i < 7; i++) {
        res += i + ' ';
      }
      console.log(res);
    }
  
    // returns the row of the move played
    playMove(col, player) {
      for(let i = 5; i >=0; i--) {
        if(this.grid[i][col] === Dot.Empty) {
          this.grid[i][col] = player;
          return i;
        }
      }
      // if we get here you called this function wrong
      console.assert(false);
      return -1;
    }
  
    // returns the row of the move removed
    unplayMove(col) {
      for(let i = 0; i < 6; i++) {
        if(this.grid[i][col] !== Dot.Empty) {
          this.grid[i][col] = Dot.Empty;
          return i;
        }
      }
      console.assert(false);
      return -1;
    }
  
    // plan:
    // - memoize stuff
    // - based on the move maybe?
    // - can do that if we run out of memory, for now let's just do vector<vector<Dot>> -> Result map
    // grid: Human was the last to play, now see if we can win.
    gridSolve(moveCount) {

        let currentPlayer;
        let desiredResult;
        let undesiredResult;
      
        if (moveCount % 2 == 1) {
          currentPlayer = Dot.AI;
          desiredResult = Result.aiWin;
          undesiredResult = Result.humanWin;
        } else {
          if (moveCount == 42) {
            return Result.humanWin;
          }
          currentPlayer = Dot.Human;
          desiredResult = Result.humanWin;
          undesiredResult = Result.aiWin;
        }
      
        const res = memo.get(JSON.stringify(this.grid));
        if (res != null) {
          return res;
        }
      
        const moves = [];
        for (let col = 0; col < 4; col++) {
          if (grid[0][col] !== Dot.Empty) {
            continue;
          }
      
          const row = playMove(col, currentPlayer);
      
          if (memo.has(hash(grid))) {
            if (memo.get(hash(grid)) === desiredResult) {
              unplayMove(col);
              memo.set(hash(grid), desiredResult);
              printGrid();
              return desiredResult;
            }
            unplayMove(col);
            continue;
          }
      
          const score = getConnectivity(row, col);
          if (score >= 4) {
            memo.set(hash(grid), undesiredResult);
            unplayMove(col);
            return undesiredResult;
          }
      
          unplayMove(col);
          moves.push([score, col]);
        }
      
        moves.sort((a, b) => b[0] - a[0]);
      
        for (const move of moves) {
          playMove(move[1], Dot.AI);
          if (gridSolve(realMoveCount) === desiredResult) {
            unplayMove(move[1]);
            memo.set(hash(grid), desiredResult);
            return desiredResult;
          }
          unplayMove(move[1]);
        }
      
        assert(false);
        return false;
      }
}