for col in range(1,8):
        for row in range(1, 8):
                if row == 1:
                        v = "topEmpty.png"
                else:
                        v = "connect4Empty.png"
                print('<img onmouseover="mouseover(this)" onclick="playMove(this)" src="./images/'+v+'" style="grid-row-start:' + str(row) + ';grid-column-start:' + str(col) + ';" id="connect'+str(row) + str(col) + '">')
