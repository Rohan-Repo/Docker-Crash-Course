print( 'Starting the BackEnd Code \n' )

# Added Date-Time because the logs were just being appended one after another 
# Date Formatting
from datetime import datetime
import pytz

curr_date = datetime.now(pytz.timezone('America/Toronto'))

print( 'Current Date-Time : {:%A, %d, %B, %Y %I:%M:%S %p %Z}'.format(curr_date), '\n' )

# Code to Read JSON File
with open('Data/companies.json') as jsonFile:
    fileData = jsonFile.read()
    print( 'JSON Data is : \n ')
    print( fileData )

print( '\n Ending the BackEnd Code' )
