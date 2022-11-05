@extends('layouts.app')

@section('main')
    <div>
        <div class="w-11/12 mx-auto py-4">


            <h1 class=" text-5xl md:text-7xl font-bold text-center mt-10 capitalize  text-indigo-500 pb-4"
                style="font-family: 'Beau Rivage', handwriting;">
                About Us
            </h1>

            <hr class="border border-red-600">

            <div x-show="language === 1">
                <p class="text-justify text-gray-700 py-2">
                    NAMASTE, WELCOME 2022 Fusion Himalaya A Nepalese restaurant established in Pori in 2022. Fusion Himalaya
                    is a family business with more than 15 years of experience in the restaurant industry. We offer fusions
                    of the best Nepali and Indian cuisine. Traditional Nepali cuisine combines fresh ingredients and a great
                    spectrum of flavors that will blow your tongue away. Our restaurant is known for the delicious meals we
                    offer, which complement a healthy diet and won't leave anyone hungry, whether your diet is gluten-free,
                </p>
                <p class="text-justify text-gray-700 py-2">

                    lactose-free or vegan! We have put together years of experience in Nepali, Indian and Finnish cuisine.
                    Based on our experience, we offer modern classic meals that suit the Finnish taste. We greatly value
                    customer feedback. Thanks to your feedback, we have always been able to improve. Tell us how you want
                    your food to be served - each portion can be customized! The degree of heat can always be adjusted
                    according to wishes. Welcome to enjoy!
                </p>
                <p class="text-gray-600">
                    -Fusion Himalaya people 2022.
                </p>
            </div>

            <div x-show="language === 2">
                <p class="text-justify text-gray-700 py-2">
                    NAMASTE , TERVETULOA 2022 Fusion Himalaya fusion Himalaya Poriin vuonna 2018 perustettu Fusion
                    Himalayaon Satakunnan ensimmäinen nepalilainen ravintola . Fusion Himalaya on perheyritys , jonka
                    taustalla on yli 15 vuoden kokemus ravintola - alalla .
                </p>

                <p class="text-justify text-gray-700 py-2">
                    Tarjoamme fuusioita parhaista nepalilaisista ja intialaista ruoista . Perinteisessä nepalilaisessa
                    keittiössä yhdistyvät tuoreet raaka - aineet ja mahtava makujen kirjo , joka vie kielen mennessään .

                    Ravintolamme on tunnettu tarjoamistamme herkullisista aterioista , jotka täydentävät terveellistä
                    ruokavaliota , eivätkä jätä ketään nälkäiseksi olipa ruokavaliosi sitten gluteeniton , laktoositon tai
                    vegaani !
                </p>
                <p class="text-justify text-gray-700 py-2">

                    Olemme koonneet yhteen vuosien kokemuksen nepalilaisessa , intialaisessa ja suomalaisessa keittiössä .
                    Kokemustemme pohjalta tarjoamme moderneja klassikkoaterioita , jotka sopivat suomalaiseen makuun .

                    Arvostamme suuresti asiakaspalautetta . Palautteenne ansiosta olemme aina pystyneet kehittymään .
                    Kertokaa meille , miten haluatte ruokanne tarjoiltavan - jokainen annos on räätälöitävissä !

                    *Tulisuusastetta voidaan aina säätää toivomusten mukaisesti*

                    Tervetuloa nauttimaan !

                <p class="text-gray-600">
                    -Fusion Himalaya väki 2022.
                </p>
                </p>
            </div>

        </div>
    @endsection
