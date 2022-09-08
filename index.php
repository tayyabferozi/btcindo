<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <meta name="csrf-token" content="V5iAj4kgXpe9ZVmsjWlKWHpUZCobQ2LyQQKqfUNx">
    <title>Bitcoin (BTC)</title>
    <meta name="description" content="MineStack" />
    <meta name="keywords" content="" />
    <meta property="og:description" content="MineStack" />
    <meta property="og:title" id="og:title" content="MineStack" />
    <meta property="og:type" content="article" />
    <link as=style crossorigin="" href="css/all.min.css" rel="stylesheet preload">


</head>
<style>
    .circles-decimals {
        font-size: .2em;
    }
</style>

<body>
    <section class="section section--calc">
        <div class="container">
            <form class="form form--calc" method="POST" action="#" target="_parent">
                <input type="hidden" name="_token" value="V5iAj4kgXpe9ZVmsjWlKWHpUZCobQ2LyQQKqfUNx">
                <div class="row--section">
                    <div class="col--section col--slider">
                        <div class="card card--calc isLg">
                            <div id="box--slider" class="box box--slider" style="flex-direction: column;">
                                <div class="row row--sliders" style="margin: 0 !important">
                                    <div id="show-calc-price" class="col-12 col-lg-12 col--inputs col--half">
                                        <div class="field field--lg field--range" id="range--btc">
                                            <div class="box box--label">
                                                <span class="text isSm isGray label">Perkiraan Harga BTC</span>
                                                <span>
                                                    <span>
                                                        <span class="text isSm isGrayLight">Rp</span>
                                                        <span class="text isMd isDark value" id="valuebtc"></span>
                                                    </span>
                                                </span>
                                            </div>

                                            <input name="range--btc" type="range" id="btcforecast" value="4500000000" min="1000000000" max="9000000000" step="100000000" style="width: 100%; color:#ddb74c; background: linear-gradient(to right, rgb(221, 183, 76) 0%, rgb(221, 183, 76) 0%, rgb(225, 233, 244) 0%, rgb(225, 233, 244));" oninput="DisplayChange(this.value)">
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-12 col--inputs col--half">


                                        <div class="row">
                                            <div class="col">
                                                <b>Pilih Paket</b>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="package" id="package1" value="1" checked onchange=" checkButton()">
                                                <label class="form-check-label" for="package1">
                                                    Basic (4.4Th/s)
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="package" id="package2" value="2" onchange=" checkButton()">
                                                <label class="form-check-label" for="package2">
                                                    Pro (11Th/s)
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="package" id="package3" value="3" onchange=" checkButton()">
                                                <label class="form-check-label" for="package3">
                                                    Master (17.6Th/s)
                                                </label>
                                            </div>
                                        </div>
                                        <h3 id="disp" style="color:green"> </h3>
                                        <input class="form-control" type="hidden" name="price" id="price" value="11900000">
                                        <input class="form-control" type="hidden" name="btcpackage" id="btcpackage" value="0.02463236">
                                        <input class="form-control" type="hidden" name="btcget" id="btcget" value="4500000000">
                                        <input class="form-control" type="hidden" name="persen" id="persen" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="same">
                                <div class="box box--top">
                                    <div class="text isMd isB isDark h-custom-style">Dengan Harga Paket :</div>
                                    <span class="text symbol-usd isSm isGray">&nbsp;Rp</span>
                                    <span class="text text-usd isSm isGray">Rp&nbsp;</span>
                                    <div class="text isMd isB isDark value--price h-custom-style" id="pricefor">11900000</div>
                                </div>
                                <div class="box box--bot">
                                    <div class="box box--item">
                                        <div class="box box--profit">
                                            <span class="text isSm isGray">Anda bisa beli</span>
                                            <span class="tag isSm isGray">
                                                <span>0</span><span>%</span>
                                                <span>Profit</span>
                                            </span>
                                        </div>
                                        <div class="box box--price">
                                            <span class="text isLg isDark isB value--price-btc" id="totalbuy">0.00264444</span>
                                            <span class="calc__padding"></span>
                                            <span class="text isLg isDark">BTC</span>
                                        </div>
                                    </div>
                                    <i class="text isXl isGray" style="font-size:30px">atau</i>
                                    <div class="box box--item">
                                        <div class="box box--profit">
                                            <span class="text isSm isGray">Anda bisa mining</span>
                                            <span class="fon-minus-profit tag isSm isGreenCalc-background form--calc-change-backround" style="background-color: rgb(36, 178, 102);">
                                                <span class="value--profit" id="profittotal">832</span><span>%</span>
                                                <span>Profit</span>
                                            </span>
                                        </div>
                                        <div class="text box box--price text-minus-profit isGreenCalc-text form--calc-change-color" style="color: rgb(36, 178, 102);">
                                            <span class="text isLg isB value--income-btc" id="youcanmine">0.02463236</span>
                                            <span class="calc__padding"></span>
                                            <span class="text isLg">BTC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text isXs isGray text--sub">
                                *Perkiraan ini hanya estimasi berdasarkan perkiraan harga Bitcoin. Biaya jasa belum termasuk dalam hitungan.
                            </div>
                            <div class="text isXs isGray text--sub2">
                                **Semua perhitungan hanyalah ilustrasi namun bukan bagian dalam kontrak penawaran. S&K Berlaku.
                            </div>
                        </div>
                    </div>
                    <div class="col--section col--donut">
                        <div class="card isXs card--calc2">
                            <div class="form--calc2-bonus-wrapper">
                                <div class="new-title title--main isCenter">
                                    <div>Yang Anda Dapatkan :</div>
                                        <span>Total Hashrate :</span>
                                        <span class="value--th" id="th">4.4</span>
                                        <span>TH/s</span>
                                    <div>
                                        <span class="value--duration"></span>
                                        <span>Nebeng 40 Bulan</span>
                                    </div>
                                </div>

                            </div>
                            <div class="box box--final">
                                <div class="total--table">
                                    <div class="box box--total-data">
                                        <div class="text--dot">
                                            <div class="dot isOrange"></div>
                                            <span class="text isSm isDark">Jumlah:</span>
                                        </div>
                                        <div class="text--price isOrangeCalc-text">
                                            <span class="text isSm" style="color: #F1BC49;">Rp</span>
                                            <span class="text isMd isB isDark value--price" style="color: #F1BC49;" id="invested">11900000</span>
                                        </div>
                                    </div>
                                    <div class="box box--total-data">
                                        <div class="text--dot">
                                            <div class="dot isGreen fon-minus-profit form--calc-change-backround" style="background-color: rgb(36, 178, 102);"></div>
                                            <span class="text isSm isDark">Profit Total:</span>
                                        </div>
                                        <div class="isGreenCalc-text text--price text-minus-profit form--calc-change-color" style="color: rgb(36, 178, 102);">
                                            <span class="text isSm calc-tags">Rp</span>
                                            <span class="text isMd isB value--profit-total" id="totalprofit">110908000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="calculator--donut">

                                    <div class="circle" id="circles-1">

                                    </div>

                                </div>
                            </div>

                            <div class="contract--profit">
                                <div class="contract--profit__group">
                                    <div class="box--top__txt">Contract Profit</div>
                                    <div class="contract--profit__percent text form--calc-change-color" style="color: rgb(36, 178, 102);"> <span class="value--profit">959</span>%</div>
                                </div>
                            </div>
                            <div class="total--line">
                                <span class="text isSm isGray"></span>
                                <span>
                                    <span class="text isMd isGray"></span>
                                    <span class="text isMd isB isDark value--price"></span>
                                    <span class="text isMd isBlabla"><span class="value--price-btc" id="totalbtc"></span></span>
                                </span>
                            </div>
                            <div class="box box--buttons">
                                <button class="button isMd isOrange isStretch" type="submit" id="buy-contract" onsubmit="alert('submit!');">BUY contract</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    </div>
    <script>
        //Thousand seperator
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
        }
        document.getElementById("valuebtc").innerHTML = numberWithCommas(4500000000)
        document.getElementById("pricefor").innerHTML = numberWithCommas(11900000)
        document.getElementById("invested").innerHTML = numberWithCommas(11900000)
        document.getElementById("totalprofit").innerHTML = numberWithCommas(110908000)
        document.getElementById("totalinvested").innerHTML = numberWithCommas(11900000)
        


        function checkButton() {
            if (document.getElementById('package1').checked) {
                document.getElementById("price").value = 11900000;
                document.getElementById("btcpackage").value = 0.02463236;
                document.getElementById("th").innerHTML = 4.4;
                document.getElementById("pricefor").innerHTML = numberWithCommas(11900000);
                document.getElementById("invested").innerHTML = numberWithCommas(11900000);
                document.getElementById("totalinvested").innerHTML = numberWithCommas(11900000);
                document.getElementById("totalbtc").innerHTML = 11900000;
                document.getElementById("youcanmine").innerHTML = "0.02463236";

            } else if (document.getElementById('package2').checked) {
                document.getElementById("price").value = 29000000;
                document.getElementById("btcpackage").value = 0.06158052;
                document.getElementById("th").innerHTML = 11;
                document.getElementById("pricefor").innerHTML = numberWithCommas(29000000);
                document.getElementById("invested").innerHTML = numberWithCommas(29000000);
                document.getElementById("totalinvested").innerHTML = numberWithCommas(29000000);
                document.getElementById("youcanmine").innerHTML = "0.06158052";

            } else if (document.getElementById('package3').checked) {
                document.getElementById("price").value = 45000000;
                document.getElementById("btcpackage").value = 0.09852207;
                document.getElementById("th").innerHTML = 17.6;
                document.getElementById("pricefor").innerHTML = numberWithCommas(45000000);
                document.getElementById("invested").innerHTML = numberWithCommas(45000000);
                document.getElementById("totalinvested").innerHTML = numberWithCommas(45000000);
                document.getElementById("youcanmine").innerHTML = "0.09852207";

            }
        

        

            

            var price = document.getElementById(
                "price").value;
            var btcget = document.getElementById(
                "btcget").value;
            var btcpackage = document.getElementById(
                "btcpackage").value;

            var youcanbuy = price / btcget;

            document.getElementById(
                "totalbuy").innerHTML = youcanbuy.toFixed(8);
            document.getElementById(
                "totalbtc").innerHTML = youcanbuy.toFixed(8);


            var profit = Math.ceil((btcpackage / youcanbuy * 100) - 100);

            var totalprofit = Math.round(price * profit / 100);

            var harga = parseInt(price);

            var fixtotal = totalprofit + harga;

            document.getElementById(
                "totalprofit").innerHTML = numberWithCommas(fixtotal);

            document.getElementById(
                "profittotal").innerHTML = profit;

            document.getElementById(
                "persen").value = profit;

            var persen = document.getElementById("persen").value;

            var myCircle = Circles.create({
                id: 'circles-1',
                radius: 60,
                value: persen,
                maxValue: 400,
                width: 10,
                text: persen + "%",
                colors: ['#FF7827', '#24b266'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                valueStrokeClass: 'circles-valueStroke',
                maxValueStrokeClass: 'circles-maxValueStroke',
                styleWrapper: true,
                styleText: true
            })
            document.querySelector(".circles-text").style.fontSize = "28px", document.querySelector(".circles-text").textContent = value + "%";
        }
    </script>
    <script src="js/circles.js"></script>

    <script>
        function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}


        function DisplayChange(newvalue) {
            document.getElementById(
                "valuebtc").innerHTML = numberWithCommas(newvalue)
            document.getElementById(
                "btcget").value = newvalue;

            var price = document.getElementById(
                "price").value;
            var btcget = document.getElementById(
                "btcget").value;
            var btcpackage = document.getElementById(
                "btcpackage").value;

            var youcanbuy = price / btcget;

            document.getElementById(
                "totalbuy").innerHTML = youcanbuy.toFixed(8);

            document.getElementById(
                "totalbtc").innerHTML = youcanbuy.toFixed(8);


            var profit = Math.ceil((btcpackage / youcanbuy * 100) - 100);

            var totalprofit = Math.round((price * profit / 100));


            var harga = parseInt(price);

            var fixtotal = totalprofit + harga;


            document.getElementById(
                "totalprofit").innerHTML = numberWithCommas(fixtotal);

            document.getElementById(
                "profittotal").innerHTML = profit;

            document.getElementById(
                "persen").value = profit;

            var persen = document.getElementById("persen").value;

            var myCircle = Circles.create({
                id: 'circles-1',
                radius: 60,
                value: persen,
                maxValue: 400,
                width: 10,
                text: persen + "%",
                colors: ['#ddb74c', '#24b266'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                valueStrokeClass: 'circles-valueStroke',
                maxValueStrokeClass: 'circles-maxValueStroke',
                styleWrapper: true,
                styleText: true
            })
            document.querySelector(".circles-text").style.fontSize = "28px", document.querySelector(".circles-text").textContent = value + "%";

        }
    </script>


    <script>
        var persen = 832;

        var myCircle = Circles.create({
            id: 'circles-1',
            radius: 60,
            value: persen,
            maxValue: 400,
            width: 10,
            text: persen + "%",
            colors: ['#ddb74c', '#24b266'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            valueStrokeClass: 'circles-valueStroke',
            maxValueStrokeClass: 'circles-maxValueStroke',
            styleWrapper: true,
            styleText: true
        })

        document.querySelector(".circles-text").style.fontSize = "28px", document.querySelector(".circles-text").textContent = value + "%";
        

    </script>
</body>

</html>