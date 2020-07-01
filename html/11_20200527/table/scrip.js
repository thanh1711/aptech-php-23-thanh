var ban ={
    Hung: {
        ten: "Hung",
        tuoi: 26,
        sothich: "choi gai",
        mauuathich: "mau do"
    },
    thanh: {
        ten: "thanh",
        tuoi: 26,
        sothich: "coi phim",
        mauuathich: "mau den"
    },
    Long: {
        ten: "Long",
        tuoi: 26,
        sothich: "uon bia",
        mauuathich: "mau xanh"
    },
}
var keys =Object.keys(ban);
console.log(keys);
function hienthi() {
    console.log('kik di');
    document.getElementById('td-11').innerHTML = keys[0];
    document.getElementById('td-12').innerHTML = ban.Hung.tuoi;
    document.getElementById('td-13').innerHTML = ban.Hung.sothich;
    document.getElementById('td-14').innerHTML = ban.Hung.mauuathich;
    document.getElementById('td-21').innerHTML = keys[1];
    document.getElementById('td-22').innerHTML = ban.thanh.tuoi;
    document.getElementById('td-23').innerHTML = ban.thanh.sothich;
    document.getElementById('td-24').innerHTML = ban.thanh.mauuathich;
    document.getElementById('td-31').innerHTML = keys[2];
    document.getElementById('td-32').innerHTML = ban.Long.tuoi;
    document.getElementById('td-33').innerHTML = ban.Long.sothich;
    document.getElementById('td-34').innerHTML = ban.Long.mauuathich;
}
