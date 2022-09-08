function numberWithCommas(x) {
  return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}

function DisplayChange(newvalue) {
  document.getElementById("valuebtc").innerHTML = numberWithCommas(newvalue);
  document.getElementById("btcget").value = newvalue;

  var price = document.getElementById("price").value;
  var btcget = document.getElementById("btcget").value;
  var btcpackage = document.getElementById("btcpackage").value;

  var youcanbuy = price / btcget;

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
    colors: ["#ddb74c", "#24b266"],
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
var persen = 1458;

var myCircle = Circles.create({
  id: "circles-1",
  radius: 60,
  value: persen,
  maxValue: 400,
  width: 10,
  text: persen + "%",
  colors: ["#ddb74c", "#24b266"],
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
