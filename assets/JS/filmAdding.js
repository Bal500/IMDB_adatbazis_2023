function showHideFields() {
    var filmFields = document.getElementById('filmFields');
    var seriesFields = document.getElementById('seriesFields');

    if (document.getElementById('typeof_film').checked) {
        filmFields.style.display = 'block';
        seriesFields.style.display = 'none';
    } else if (document.getElementById('typeof_series').checked) {
        filmFields.style.display = 'none';
        seriesFields.style.display = 'block';
    }
}
