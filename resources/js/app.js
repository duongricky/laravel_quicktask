$(document).ready(function() {
    let btnDel = $('.btnDelete');

    btnDel.click(function() {
        let question = btnDel.data('question');
        return confirm(question);
    });
});
