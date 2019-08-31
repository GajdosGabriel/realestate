$('.input').change(function() {
    calculate();
});

function calculate() {
    var number = $('#number').val();
    var percent = $('#duration').val();
    var years = 0;

    if (percent == 8) years = 3;
    else if (percent == 9.5) years = 5;
    else years = 7;

    var cost = number * 5000;

    var profit = cost * (percent/100) * years;

    var monthly = profit/(years*12);

    $('#value').val('€ ' + cost.formatMoney(0, ',', ' '));
    $('#percent').val(percent + '% p.a.');
    $('#profit').val('€ ' + profit.formatMoney(0, ',', ' '));
    $('#monthly').val('€ ' + monthly.formatMoney(2, ',', ' '));
}

Number.prototype.formatMoney = function(c, d, t){
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
