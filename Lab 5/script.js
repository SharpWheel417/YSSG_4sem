const setLatex = (latexExpression) => {
    var element = document.getElementById('latex-expression');
    katex.render(latexExpression.replace(/@/g, ' '), element);
}

function main() {
    var queryString = window.location.search.substring(1);
    var params = queryString.split("&");

    for (var i = 0; i < params.length; i++) {
        var param = params[i].split("=");
        if (param[0] === 'result') {
            let str = decodeURIComponent(param[1]);
            setLatex(str);
            return;
        }
    }

}

main();