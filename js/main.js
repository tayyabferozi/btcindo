const package1 = document.querySelector("#package1");
const package2 = document.querySelector("#package2");
const package3 = document.querySelector("#package3");
const package4 = document.querySelector("#package4");
document.querySelector("#buy-contract").addEventListener("click", (e) => {
  e.preventDefault();
  if (package1.checked) {
    window.open(
      "https://minestack.id/checkout/new?p%5B0%5D%5Bid%5D=P-2wk7S3&p%5B0%5D%5Bv%5D=0%3A2&p%5B0%5D%5Bc%5D=1 ",
      "_blank"
    );
  } else if (package2.checked) {
    window.open(
      "https://minestack.id/checkout/new?p%5B0%5D%5Bid%5D=P-2wk7S3&p%5B0%5D%5Bv%5D=0%3A3&p%5B0%5D%5Bc%5D=1",
      "_blank"
    );
  } else if (package3.checked) {
    window.open(
      "https://minestack.id/checkout/new?p%5B0%5D%5Bid%5D=P-2wk7S3&p%5B0%5D%5Bv%5D=0%3A5&p%5B0%5D%5Bc%5D=1",
      "_blank"
    );
  } else if (package4.checked) {
    window.open(
      "https://minestack.id/checkout/new?p%5B0%5D%5Bid%5D=P-2wk7S3&p%5B0%5D%5Bv%5D=0%3A7&p%5B0%5D%5Bc%5D=1",
      "_blank"
    );
  }
});

//Thousand seperator
function numberWithCommas(x) {
  return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
document.getElementById("valuebtc").innerHTML = numberWithCommas(4500000000);
document.getElementById("pricefor").innerHTML = numberWithCommas(28900000);
document.getElementById("invested").innerHTML = numberWithCommas(28900000);
document.getElementById("totalprofit").innerHTML = numberWithCommas(450262000);
// document.getElementById("totalinvested").innerHTML = numberWithCommas(11900000)

function checkButton() {
  if (document.getElementById("package1").checked) {
    document.getElementById("price").value = 11900000;
    document.getElementById("btcpackage").value = 0.03991162;
    document.getElementById("th").innerHTML = 7.5;
    document.getElementById("pricefor").innerHTML = numberWithCommas(11900000);
    document.getElementById("invested").innerHTML = numberWithCommas(11900000);
    // document.getElementById("totalinvested").innerHTML = numberWithCommas(11900000);
    document.getElementById("totalbtc").innerHTML = 11900000;
    document.getElementById("youcanmine").innerHTML = "0.03991162";
  } else if (document.getElementById("package2").checked) {
    document.getElementById("price").value = 28900000;
    document.getElementById("btcpackage").value = 0.1000448;
    document.getElementById("th").innerHTML = 18.8;
    document.getElementById("pricefor").innerHTML = numberWithCommas(28900000);
    document.getElementById("invested").innerHTML = numberWithCommas(28900000);
    // document.getElementById("totalinvested").innerHTML = numberWithCommas(28900000);
    document.getElementById("youcanmine").innerHTML = "0.10004480";
  } else if (document.getElementById("package3").checked) {
    document.getElementById("price").value = 44900000;
    document.getElementById("btcpackage").value = 0.16017847;
    document.getElementById("th").innerHTML = 30.1;
    document.getElementById("pricefor").innerHTML = numberWithCommas(44900000);
    document.getElementById("invested").innerHTML = numberWithCommas(44900000);
    // document.getElementById("totalinvested").innerHTML = numberWithCommas(44900000);
    document.getElementById("youcanmine").innerHTML = "0.16017847";
  } else if (document.getElementById("package4").checked) {
    document.getElementById("price").value = 89900000;
    document.getElementById("btcpackage").value = 0.33046761;
    document.getElementById("th").innerHTML = 62.1;
    document.getElementById("pricefor").innerHTML = numberWithCommas(89900000);
    document.getElementById("invested").innerHTML = numberWithCommas(89900000);
    // document.getElementById("totalinvested").innerHTML = numberWithCommas(89900000);
    document.getElementById("youcanmine").innerHTML = "0.33046761";
  }

  var price = document.getElementById("price").value;
  var btcget = document.getElementById("btcget").value;
  var btcpackage = document.getElementById("btcpackage").value;

  var youcanbuy = Number(price) / Number(btcget);

  document.getElementById("totalbuy").innerHTML = youcanbuy.toFixed(8);
  document.getElementById("totalbtc").innerHTML = youcanbuy.toFixed(8);

  var profit = Math.ceil((btcpackage / youcanbuy) * 100 - 100);

  var totalprofit = Math.round((price * profit) / 100);

  var harga = parseInt(price);

  var fixtotal = totalprofit + harga;

  document.getElementById("totalprofit").innerHTML = numberWithCommas(fixtotal);

  document.getElementById("profittotal").innerHTML = profit;

  document.getElementById("persen").value = profit;

  var persen = document.getElementById("persen").value;

  var myCircle = Circles.create({
    id: "circles-1",
    radius: 60,
    value: persen,
    maxValue: 400,
    width: 10,
    text: persen + "%",
    colors: ["#FF7827", "#24b266"],
    duration: 400,
    wrpClass: "circles-wrp",
    textClass: "circles-text",
    valueStrokeClass: "circles-valueStroke",
    maxValueStrokeClass: "circles-maxValueStroke",
    styleWrapper: true,
    styleText: true,
  });
  (document.querySelector(".circles-text").style.fontSize = "28px"),
    (document.querySelector(".circles-text").textContent = value + "%");
}
