import sqlite3
log=sqlite3.connect("Record.db")
recur=log.cursor()
recur.execute("Create table record(Username integer Primary Key Autoincrement, Password text(15));")
log.commit()
log.close()