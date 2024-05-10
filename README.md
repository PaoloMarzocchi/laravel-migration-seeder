# Trains table

Id PK AI UNIQUE BIGINT NOTNULL
Company VARCHAR(50)
Departure Station VARCHAR(80) NOTNULL 
Arrival Station VARCHAR(80) NOTNULL
Departure Time DATETIME 
Arrival Time DATETIME
Train Code VARCHAR(100) NOTNULL
Carriages number TINYINT UNSIGNED
On Time BOOLEAN
Canceled BOOLEAN