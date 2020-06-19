String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1)
}

function updateTemp(airTemp) {
    if (!airTemp) return;
    $('#tempTime').html(airTemp.timestamp);
    $('#tempDegree').html(airTemp.value + ' Degree');
}

function updatePSI(psi) {
    if (!psi) return;
    let html = '';

    ['national', 'north', 'south', 'east','west'].forEach(region => {
        const pm10_twenty_four_hourly   = psi[region].find(x => x.type === 'pm10_twenty_four_hourly').value;
        const pm25_twenty_four_hourly   = psi[region].find(x => x.type === 'pm25_twenty_four_hourly').value;
        const co_sub_index              = psi[region].find(x => x.type === 'co_sub_index').value;
        const o3_sub_index              = psi[region].find(x => x.type === 'o3_sub_index').value;
        const so2_sub_index             = psi[region].find(x => x.type === 'so2_sub_index').value;
        html +=    `<tr>
                        <td>${region.capitalize()}</td>
                        <td>${pm10_twenty_four_hourly}</td>
                        <td>${pm25_twenty_four_hourly}</td>
                        <td>${co_sub_index}</td>
                        <td>${o3_sub_index}</td>
                        <td>${so2_sub_index}</td>
                    </tr>`;
        
    });

    $('#psiTableBody').html(html);
}

fetch('/api/data-gov')
    .then(response => response.json())
    .then(data => {
        updateTemp(data.airTemp);
        updatePSI(data.psi);
    });