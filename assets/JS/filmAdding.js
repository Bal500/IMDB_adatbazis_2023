function showHideFields() {
    let filmFields = document.getElementById('filmFields');
    let seriesFields = document.getElementById('seriesFields');
    let actorFields = document.getElementById('actorFields');

    if (document.getElementById('typeof_film').checked) {
        filmFields.style.display = 'block';
        seriesFields.style.display = 'none';
        actorFields.style.display = 'none';
    } else if (document.getElementById('typeof_series').checked) {
        filmFields.style.display = 'none';
        seriesFields.style.display = 'block';
        actorFields.style.display = 'none';
    } else if (document.getElementById('typeof_actor').checked) {
        filmFields.style.display = 'none';
        seriesFields.style.display = 'none';
        actorFields.style.display = 'block';
    }
}
