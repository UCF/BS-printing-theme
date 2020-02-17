now = new Date
theYear=now.getYear()
if (theYear < 1900)
theYear=theYear+1900
document.getElementById('year').innerHTML = theYear