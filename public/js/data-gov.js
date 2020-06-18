fetch('/api/data-gov')
    .then(response => response.json())
    .then(data => {
        $('#tempTime').html(data.airTemp.timestamp);
        $('#tempDegree').html(data.airTemp.value + ' Degree');
    });