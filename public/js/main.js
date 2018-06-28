function start () {
    fetch('http://localhost:8000/api/startstop',
    {
        'method': 'post',
        'headers': {'Content-Type': 'application/json' },
        'body': '{ "start": 1}'
    })
    .then(request => request.json())
    .then(function (response) {
        console.log("Lecture démarrée")
    })
    .catch(error => console.error(error))
}
function stop () {
    fetch('http://localhost:8000/api/startstop',
    {
        'method': 'post',
        'headers': {'Content-Type': 'application/json' },
        'body': '{ "start": 0}'
    })
    .then(request => request.json())
    .then(function (response) {
        console.log("Lecture arrêtée")
    })
    .catch(error => console.error(error))
}