@extends('member/contracts/_layout')

@section('content')
    {{-- Slovak title header --}}
    <h2 class="text-center">@lang('member/contracts/sp.title', [], 'sk')</h2>
    <p class="text-center">
        @lang('member/contracts/sp.law', [], 'sk')
    </p>


    {{-- Englist title header --}}
    <h2 class="text-center lang">CONTRACT FOR THE SILENT PARTNERSHIP</h2>
    <p class="text-center lang">
        concluded under Section 673 et seq. of Act no. 513/1991 Coll., Commercial Code, as amended (hereinafter referred to as "the Contract")
    </p>


    <table class="details">
        <tr>
            <th>@lang('member/contracts/sp.en', [], 'sk')</th>

            <th>@lang('member/contracts/sp.sp', [], 'sk')</th>
        </tr>

        <tr>
            <td>
                <strong>Šírava Development s.r.o.</strong><br>
                @lang('form.companyID', [], 'sk'): 52 112 985<br>
                Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                @lang('member/contracts/sp.representedBy', ['director' => config('cee.director')], 'sk')<br><br>
                E-mail: info@cee-realestate.com<br>

                a<br>
                <strong>Budúci prevodca akcií:</strong><br>
                <span>Obchodné meno: </span><strong>CEE Real Estate Group s.r.o.</strong><br>
                <span>Sídlo: </span><strong>Gorkého 5, Bratislava - mestská časť Staré Mesto 811 01,</strong><br>
                <span>IČO:</span><strong>51 773 074</strong><br>
                <span>Zápis: Obchodný register Okresného súdu Bratislava I. odd. Sro, Vl.č.: 132947/B'</span><br>
                <span>Konajúca: </span> <strong>Lucia Ciriaková, konateľ</strong><br>
                <span>(ďalej len „CEE Real Estate Group s.r.o.”)</span><br><br>
                <span>spolu ďalej aj ako „Zmluvné strany“</span><br>
            </td>

            <td>
                @lang('form.fullName', [], 'sk'): <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
                @lang('form.govID', [], 'sk'): <strong>{{ $objOrder->government_id }}</strong><br>
                @lang('public/contact.address', [], 'sk'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
                @lang('form.region', [], 'sk'): <strong>{{ $objOrder->region }}</strong><br>
                @lang('form.country', [], 'sk'): <strong>{{ $objOrder->country }}</strong><br>
                @lang('form.nationality', [], 'sk'): <strong>{{ $objOrder->nationality }}</strong><br><br>
                E-mail: <strong>{{ $objOrder->email }}</strong>

                @if($objOrder->company)
                    <br><br><strong>@lang('member/invest/step1.company', [], 'sk')</strong><br>
                    @lang('form.company', [], 'sk'): <strong>{{ $objOrder->company->name }}</strong><br>
                    @lang('form.companyID', [], 'sk'): <strong>{{ $objOrder->company->id_number }}</strong><br>
                    @lang('public/contact.address', [], 'sk'): <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                    @lang('form.region', [], 'sk'): <strong>{{ $objOrder->company->region }}</strong><br>
                    @lang('form.country', [], 'sk'): <strong>{{ $objOrder->company->country }}</strong>
                @endif

                @if($objOrder->joint)
                    <br><br><strong>@lang('member/invest/step1.joint', [], 'sk')</strong><br>
                    @lang('form.fullName', [], 'sk'): <strong>{{ $objOrder->joint->name }}</strong><br>
                    @lang('form.govID', [], 'sk'): <strong>{{ $objOrder->joint->government_id }}</strong>
                @endif
            </td>
        </tr>


        {{--Dalej ako podnikateľ--}}
        <tr>
            <th>ďalej ako "Podnikateľ"</th>

            <th>ďalej ako "Tichý spoločník"</th>
        </tr>
    </table>

    {{--Zlom prvej strany --}}
    <pagebreak />
    <br>


        <table class="details lang">
            <tr>
                <th>Entrepreneur</th>

                <th>Silent partner</th>
            </tr>

            <tr>
                <td>
                    <strong>Šírava Development s.r.o.</strong><br>
                    @lang('form.companyID'): 52 112 985<br>
                    Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                    @lang('member/contracts/sp.representedBy', ['director' => config('cee.director')])<br><br>
                    E-mail: info@cee-realestate.com<br>

                    {{-- Doplnenie prevodu na firmu --}}
                    and<br>
                    <strong>Future trader of shares:</strong><br>
                    <span>On behalf of full power: </span><strong>CEE Real Estate Group s.r.o.</strong><br>
                    <span>Sídlo: </span><strong>Gorkého 5, Bratislava - mestská časť Staré Mesto 811 01,</strong><br>
                    <span>Company ID number: </span><strong>51 773 074</strong><br>
                    <span>Commercial Register of the District Court Bratislava I. odd. Sro, Vl.č.: 132947/B</span><br>
                    <br>
                    <span>Managing Director </span> <strong>Lucia Ciriaková, Managing Director</strong><br>
                    <span>(ďalej len „CEE Real Estate Group s.r.o.”)</span><br><br>
                    <span>spolu ďalej aj ako „Zmluvné strany“</span><br>

                </td>

                <td>
                    @lang('form.fullName'): <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
                    @lang('form.govID'): <strong>{{ $objOrder->government_id }}</strong><br>
                    @lang('public/contact.address'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
                    @lang('form.region'): <strong>{{ $objOrder->region }}</strong><br>
                    @lang('form.country'): <strong>{{ $objOrder->country }}</strong><br>
                    @lang('form.nationality'): <strong>{{ $objOrder->nationality }}</strong><br><br>
                    E-mail: <strong>{{ $objOrder->email }}</strong>



                    @if($objOrder->company)
                        <br><br><strong>@lang('member/invest/step1.company')</strong><br>
                        @lang('form.company'): <strong>{{ $objOrder->company->name }}</strong><br>
                        @lang('form.companyID'): <strong>{{ $objOrder->company->id_number }}</strong><br>
                        @lang('public/contact.address'): <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                        @lang('form.region'): <strong>{{ $objOrder->company->region }}</strong><br>
                        @lang('form.country'): <strong>{{ $objOrder->company->country }}</strong>
                    @endif

                    @if($objOrder->joint)
                        <br><br><strong>@lang('member/invest/step1.joint')</strong><br>
                        @lang('form.fullName'): <strong>{{ $objOrder->joint->name }}</strong><br>
                        @lang('form.govID'): <strong>{{ $objOrder->joint->government_id }}</strong>
                    @endif
                </td>
            </tr>

            <tr>
                <th>hereafter as "Entrepreneur"</th>

                <th>hereafter as "Silent partner"</th>
            </tr>
        </table>


    <br>

    <table class="details">
        <tr>
            <th colspan="2">
                @lang('member/contracts/tdo.params', [], 'sk')
            </th>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.name', [], 'sk')</td>

            <td>
                <strong>{{ $objOrder->sp->project->name }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.location', [], 'sk')</td>

            <td>
                <strong>{{ $objOrder->sp->project->location }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.2', [], 'sk')</td>

            <td>
                <strong>{{ number_format($objOrder->sp->shares, 2, ',', ' ') }}%</strong><br>
                @lang('member/contracts/tdo.4', [], 'sk')
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.3', [], 'sk')</td>

            <td>
                &euro; <strong>{{ number_format($objOrder->sp->investment, 0, ',', ' ') }}</strong><br>
                @lang('member/contracts/tdo.5', [], 'sk')
            </td>
        </tr>
    </table>

    <br>


    <table class="details lang">
            <tr>
                <th colspan="2">
                    @lang('member/contracts/tdo.params')
                </th>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.name')</td>

                <td>
                    <strong>{{ $objOrder->sp->project->name }}</strong>
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.location')</td>

                <td>
                    <strong>{{ $objOrder->sp->project->location }}</strong>
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.2')</td>

                <td>
                    <strong>{{ number_format($objOrder->sp->shares, 2, ',', ' ') }}%</strong><br>
                    @lang('member/contracts/tdo.4')
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.3')</td>

                <td>
                    &euro; <strong>{{ number_format($objOrder->sp->investment, 0, ',', ' ') }}</strong><br>
                    @lang('member/contracts/tdo.5')
                </td>
            </tr>
        </table>


    <br>

    <h3 class="text-center">Článok I <br> Preambula</h3>

    <p>Podnikateľ spolu so svojou materskou spoločnosťou CEE Real Estate Group s.r.o., pripravujú realitný projekt s označením Šírava Park (Eco & Lake Resort) v oblasti Zemplínska Šírava v katastrálnom území obce Klokočov z uvedeného dôvodu sa Zmluvné strany dohodli, že do momentu nadobudnutia vlastníckeho práva k akciám v spoločnosti Podnikateľa za podmienok definovaných v čl. VII tejto Zmluvy má Tichý spoločník záujem podieľať sa na podnikaní Podnikateľa v súvislosti s realitným projektom s označením Šírava Park (Eco & Lake Resort) prostredníctvom investície ako peňažnej čiastky vo forme vkladu tichého spoločníka podľa § 673 a nasl. zákona č. 513/1991 Zb., Obchodný zákonník v tejto Zmluve.</p>

    {{--@if(App::getLocale() != 'sk')--}}
        <h3 class="text-center lang">Article I <br>
            Preamble</h3>

        <p class="lang">The Entrepreneur together with its parent company CEE Real Estate Group sro are preparing a real estate project entitled Šírava Park in the Zemplínska Šírava area in the cadastral area of the municipality of Klokočov. For this reason, the Parties agree that, until the acquisition of title to shares in the Entrepreneur under the conditions defined in Art. VII of this Agreement, the Silent partner wishes to participate in the Entrepreneur's business in connection with the real estate project Šírava Park through an investment made in a monetary form (contribution) as a silent partner pursuant to Section 673 et seq. of Act no. 513/1991 Coll., Commercial Code.</p>
    {{--@endif--}}




    <h3 class="text-center">Článok II Predmet zmluvy a vklad</h3>

    <ol>
        <li>Predmetom Zmluvy je na strane jednej záväzok Tichého spoločníka poskytnúť Podnikateľovi vklad a podieľať sa spolu s ním na jeho podnikaní a na strane druhej záväzok Podnikateľa spočívajúci vo vyplácaní časti zisku vyplývajúceho z podielu Tichého spoločníka na výsledku podnikania.</li>
        <li>@lang('member/contracts/sp.2_2', ['amount' =>  number_format($objOrder->sp->investment, 0, ',', ' ') ], 'sk')</li>
        <li>Tichý spoločník sa zväzuje poskytnúť Podnikateľovi Vklad podľa bodu 2 tohto článku Zmluvy tým, že peňažné prostriedky zodpovedajúce výške vkladu poukáže najneskôr do 3 pracovných dní odo dňa podpisu tejto Zmluvy na bankový účet CEE Real Estate Group s.r.o. IBAN: SK91 7500 0000 0040 2601 5125, ktorý je platobným miestom stanoveným Podnikateľom touto Zmluvou za účelom odovzdania Vkladu Podnikateľovi.</li>
        <li>CEE Real Estate Group s.r.o sa zaväzuje odovzdať Vklad Podnikateľovi najneskôr dňa 31.12. 2022 v prípade, ak dovtedy nedôjde k prevodu akcií spoločnosti Podnikateľa, alebo spoločnosti Právneho nástupcu podnikateľa na Tichého spoločníka. Predmetom tejto Zmluvy je súčasne zväzok uzatvoriť zmluvu o budúcej zmluve o kúpe akcií Podnikateľa za podmienok stanovených v čl. VII tejto  Zmluvy.</li>

        <li>@lang('member/contracts/sp.3', ['amount' => $objOrder->sp->investment], 'sk')</li>

        <li>Podnikateľ touto Zmluvou vyhlasuje že Vklad prijíma a zaväzuje sa zaplatiť Tichému spoločníkovi podiel z čistého zisku vo výške podľa čl. III bod 1.</li>

        <li>Tichý spoločník má ohľadne Vkladu právne postavenie, aké má veriteľ ohľadne svojej pohľadávky, nie je však oprávnený požadovať vrátenie Vkladu pred zánikom tejto Zmluvy.</li>
    </ol>

    {{--@if(App::getLocale() != 'sk')--}}
        <h3 class="text-center lang">Article II <br>
            Subject matter of the Agreement and Contribution</h3>

        <ol class="lang">
            <li>The subject matter of the Contract is, on the one hand, the pledge of the Silent partner to provide the Entrepreneur with a contribution and to participate in its business and, on the other hand, the Entrepreneur's obligation to pay part of the profits corresponding to the share of the Silent partner in the business result.</li>

            <li>The Silent partner undertakes to provide the Entrepreneur with a cash deposit of EUR {{ number_format($objOrder->sp->investment, 0, ',', ' ') }} (hereinafter referred to as the Contribution).</li>

            <li>The Silent partner undertakes to provide the Entrepreneur with the contribution under point 2 of this Article of the Agreement by transferring funds corresponding to the amount of the contribution no later than 3 working days from the date of signing this Agreement to the bank account of CEE Real Estate Group s.r.o. IBAN: Fbud, which is the payment venue designated by the Entrepreneur under this Agreement for the purpose of handing over the contribution to the Entrepreneur.</li>

            <li>CEE Real Estate Group s.r.o undertakes to hand over the contribution to the Entrepreneur no later than December 31, 2022 if the shares of the Entrepreneur or Entrepreneur's Legal uccessor are not transferred to the Silent partner. The subject matter of this Agreement is at the same time the obligation to conclude a future contract on the purchase of shares of the Entrepreneur under the conditions set out in Art. VII of this Agreement.</li>

            <li>By this Agreement, the Entrepreneur declares that it accepts the contribution from the Silent partner under the conditions defined in this Agreement and undertakes to pay the Silent partner a share of the Entrepreneur's net profit in accordance with Art. III, par. 1.</li>

            <li>With regard to the contribution, the Silent partner has a legal status of the creditor, however, it is not entitled to demand the return of the contribution before the termination of this Agreement.</li>

            <li>The subject matter of this Agreement is at the same time the obligation to conclude a future contract on the purchase of shares of the Entrepreneur under the conditions set forth in Art. VII of this Agreement.</li>
        </ol>
    {{--@endif--}}

    <h3 class="text-center">@lang('member/contracts/sp.a3', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.7', ['shares' => number_format($objOrder->sp->shares, 2, ',', ' ')], 'sk')</li>

        <li>Pre určenie podielu Tichého spoločníka na výsledku podnikania je rozhodná ročná účtovná závierka Podnikateľa.</li>

        <li>Spoločník sa začína podieľať na podnikaní Podnikateľa dňom poskytnutia Vkladu.</li>

        <li>Tichému spoločníkovi vzniká nárok na podiel zo zisku vo výške stanovenej v bode 1 tohto článku do 30 dní odo dňa schválenia účtovnej závierky v spoločnosti Podnikateľa v súlade so zakladateľskou listinou Podnikateľa a zákonom.</li>

        <li>V prípade, že Zmluva zanikne v priebehu kalendárneho roka, Tichému  spoločníkovi patrí podiel na zisku zodpovedajúci obdobiu roka dokedy Zmluva platila.</li>

        <li>Podiel na zisku sa vypláca v eurách na bankový účet Tichého spoločníka.</li>

        <li>O podiel na strate sa znižuje vklad Tichého spoločníka. O podiel na zisku v ďalších rokoch sa znížený vklad zvyšuje a nárok na podiel na zisku vzniká Tichému spoločníkovi po dosiahnutí pôvodnej výšky jeho vkladu.</li>

        <li>Tichý spoločník nie je povinný pri podiele na strate z podnikania svoj vklad dopĺňať a na strate sa zúčastňuje len do výšky svojho vkladu.</li>
    </ol>


        <h3 class="text-center lang">Article III <br>
            Silent share in the result of the Entrepreneur's business</h3>

        <ol class="lang">
            <li>The Parties agree that the Silent partner's share of the Entrepreneur's net profit is {{ number_format($objOrder->sp->shares, 2, ',', ' ') }} % of the net profit.</li>
            <li>The determination of the share of the Silent partner in the business result is determined by the annual financial statements of the Entrepreneur.</li>
            <li>The Partner begins to participate in the Entrepreneur's business on the day the contribution has been made.</li>
            <li>The Silent partner shall be entitled to a share of profits as set out in par. 1 of this Article within 30 days of the date of approval of the financial statements in the Entrepreneur' in accordance with the Entrepreneur's Deed of Foundation and applicable law.</li>
            <li>In the event that the Agreement expires in the course of a calendar year, the Silent partner is entitled to a share in profit corresponding to the period of the year during which the Agreement was in force.</li>
            <li>The profit share shall be paid in euro to the bank account of the Silent partner.</li>
            <li>The silent partnership contribution is reduced by the share of the loss. The share in profit in the following years increases the reduced amount of contribution. The entitlement of the Silent partner to a share in profit arises after its contribution reaches the original amount.</li>
            <li>The Silent partner is not obliged to add to its contribution in the case of business loss. The Silent partner participates in the loss only up to the amount of its contribution.</li>
        </ol>


    <h3 class="text-center">@lang('member/contracts/sp.a4', [], 'sk')</h3>

    <ol>
        <li>Tichý spoločník je oprávnený nahliadať do všetkých obchodných dokladov a účtovných záznamov týkajúcich sa podnikania, na ktorom sa podieľa svojím vkladom podľa Zmluvy.</li>

        <li>Podnikateľ je povinný poskytnúť Tichému spoločníkovi na požiadanie informácie o podnikateľskom zámere Podnikateľa na budúce obdobie a o predpokladanom vývoji stavu majetku a financií týkajúcich sa podnikania Podnikateľa, na ktorom sa Tichý spoločník podieľa svojím Vkladom podľa tejto Zmluvy.</li>

        <li> Podnikateľ je povinný na požiadanie poskytnúť Tichému spoločníkovi kópiu účtovnej závierky, ak zákon ukladá Podnikateľovi povinnosť mať účtovnú závierku overenú audítorom, a výročnú správu, tak je povinný Tichému spoločníkovi predložiť aj účtovnú závierku overenú audítorom, a výročnú správu Podnikateľa.</li>

        <li>Podnikateľ je povinný na žiadosť Tichého spoločníka zaslať požadované informácie alebo kópie listín Tichému spoločníkovi na ním uvedenú adresu na vlastné náklady.</li>
    </ol>


        <h3 class="text-center lang">Article IV <br>
            Right of control</h3>

        <ol class="lang">
            <li>The Silent partner shall have the right to inspect all business documents and accounting records relating to the business in which it participates with its contribution under the Contract.</li>

            <li>Upon request, the Entrepreneur is obliged to provide the Silent partner with information about the business plan of the Entrepreneur for the future and about the anticipated development of the state of assets and finances related to the Entrepreneur's business in which the Silent partner participates with its contribution under this Agreement.</li>

            <li>Upon request, the Entrepreneur is obliged to provide the Silent partner with a copy of the financial statements, if the law imposes an obligation on the Entrepreneur to have audited financial statements and an annual report.</li>

            <li>The Entrepreneur is obliged to send the requested information or copies of the documents to the Silent partner at his own expense at the request of the Silent Partner.</li>
        </ol>


    <h3 class="text-center">@lang('member/contracts/sp.a5', [], 'sk')</h3>

    <ol>
        <li>Tichý spoločník sa zaväzuje zachovávať mlčanlivosť o všetkých skutočnostiach tvoriacich obsah podnikateľských aktivít, ktorých je Podnikateľ zúčastnený a na ktorých sa Tichý spoločník podieľa svojím vkladom.</li>

        <li>V prípade, že Tichý spoločník poruší povinnosti, ktoré mu vyplývajú z bodu 1 tohto článku zaväzuje sa Podnikateľovi zaplatiť zmluvnú pokutu vo výške 5% Vkladu.</li>
    </ol>


        <h3 class="text-center lang">Article V <br>
            Obligation to maintain confidentiality</h3>

        <ol class="lang">
            <li>The Silent partner undertakes to maintain the confidentiality of all facts constituting the content of the business activities in which the Entrepreneur is involved and in which the Silent partner participates with its contribution.</li>
        </ol>



    <h3 class="text-center">@lang('member/contracts/sp.a6', [], 'sk')</h3>

    <ol>
        <li>Zmluva sa uzatvára na dobu neurčitú.</li>

        <li>Účasť tichého spoločníka na podnikaní a Podnikateľa a súčasne táto Zmluva zaniká:

            <ol type="a">
                <li>uplatnením opcie podľa čl. VII tejto Zmluvy.</li>

                <li>výpoveďou, ak nebola zmluva uzavretá na dobu určitú,</li>

                <li>ak dosiahne podiel Tichého spoločníka na strate výšku jeho vkladu,</li>

                <li>@lang('member/contracts/sp.26', [], 'sk')</li>

                <li>@lang('member/contracts/sp.27', [], 'sk')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/sp.28', [], 'sk')</li>

        <li>@lang('member/contracts/sp.29', [], 'sk')</li>
    </ol>


        <h3 class="text-center lang">Article VI <br>
            Termination of the Agreement
        </h3>

        <ol class="lang">
            <li>The Agreement is concluded for an indefinite period.</li>

            <li>2.	The participation of the Silent partner in the Entrepreneur's business and at the same time this Agreement shall terminate by:

                <ol type="a">
                    <li>exercising the option under Art. VII of this Agreement.</li>

                    <li>by giving notice if the Agreement has not been concluded for a definite period,</li>

                    <li>if the share of the Silent partner in the loss reaches the amount of its contribution,</li>

                    <li>the business to which the Agreement applies ceases to exist,</li>

                    <li>the Entrepreneur declares bankruptcy or the petition for bankruptcy is rejected due to lack of property.</li>
                </ol>
            </li>

            <li>Either Party may terminate the Agreement with a three-month notice period, the notice period commencing on the month following receipt of the notice. The Silent partner is not entitled to terminate the Agreement before 31 December, 2022.</li>

            <li>Within 30 days after the termination of the Agreement, the Entrepreneur is obliged to return to the Silent partner its contribution increased or decreased by its share in the business result. The Entrepreneur shall not be obliged to return to the Silent partner the contribution pursuant to par. 4 of this Article of the Agreement in the event that this Agreement is terminated in accordance with par 2 (a) of this Article (the option to purchase the shares of the Entrepreneur or the option to purchase the shares of the Entrepreneur's Legal Successor in accordance with Article VII of this Agreement), because in this case the contribution is considered to be the purchase price for the transfer of shares in the Entrepreneur or Entrepreneur's Legal successor.</li>
        </ol>



    {{--START New version silent partner--}}

    <h3 class="text-center">@lang('member/contracts/sp.a8', [], 'sk')</h3>
    <span class="text-center">@lang('member/contracts/sp.a8b', [], 'sk')</span>


    <ol>
        <li>@lang('member/contracts/sp.a81', ['shares' => number_format($objOrder->sp->shares, 2, ',', ' ')], 'sk')</li>
        <li>@lang('member/contracts/sp.a82', [], 'sk')</li>
        <li>@lang('member/contracts/sp.a83', [], 'sk')</li>
    </ol>



        <h3 class="text-center lang">Article VII <br>
            Option to purchase shares of the Entrepreneur or Entrepreneur's Legal Successor <br>
            (Future Share Purchase Agreement) <br>
            in the Entrepreneur or Entrepreneur's Legal Successor)
        </h3>

        <ol class="lang">
            <li>In the event that during the term of this Contract, the Entrepreneur’s company is transformed into a joint stock company and / or is merged with another trading company that is a joint-stock company, whose shareholder is CEE Real Estate Group s.r.o. (hereinafter referred to as “Legal Successor of the Entrepreneur"),”), but no later than December 31, 2022, the Silent Partner agrees that in the case of delivery of a written notice by CEE Real Estate Group s.r.o. as a shareholder of the Entrepreneur or shareholder of the Legal Successor of the Entrepreneur addressed to the Silent Partner to conclude a contract on the transfer of shares of the Entrepreneur or the Legal Successor of the Entrepreneur, it shall conclude with CEE Real Estate Group s.r.o. as a shareholder of the Entrepreneur, or a
                shareholder of the Entrepreneur's Legal Successor within 10 days from the delivery of such a written notice an agreement on the transfer of shares of the Entrepreneur or Entrepreneur's Legal Successor the amount of which shall be {{ number_format($objOrder->sp->shares, 2, ',', ' ') }} % of the registered capital of the Entrepreneur or Entrepreneur's Legal Successor as of the day of its delivery to  CEE Real Estate Group s.r.o. as a shareholder of the Entrepreneur or Entrepreneur's Legal Successor for a fee equal to the amount of the silent partnership contribution under this Agreement"). The method of payment of the Purchase Price for the transfer of shares in the Entrepreneur's company or for the transfer of shares in the Entrepreneur's Legal Successor is set forth in par. 3 of this Article of the Agreement.
            </li>
            <li>In order to avoid any doubt, the provision of Art. VII, par. 1 of the Contract shall be deemed to constitute a future contract on the purchase of shares of the Entrepreneur concluded between CEE Real Estate Group s.r.o. and the silent partner as the future acquirer of the Entrepreneur's shares or a future contract on the purchase of shares of the Legal Successor of the Entrepreneur concluded between CEE Real Estate Group s.r.o. and the silent partner as the future acquirer of the shares of the Legal Successor of the Entrepreneur.</li>
            <li>In the event that the Silent Partner exercised an option to purchase shares in the Entrepreneur or in the Entrepreneur's Legal Successor under this Article of the Agreement, the Purchase Price for the transfer of shares in the Entrepreneur, or the Purchase Price for the transfer of shares in the Legal successor of the Entrepreneur will be paid to the transferor of these shares - CEE Real Estate Group s.r.o. from the funds deposited by the Silent partner to CEE Real Estate Group s.r.o. in accordance with Art. III, par. 3 of this Agreement. For the avoidance of doubt, CEE Real Estate Group s.r.o. has the right to retain funds corresponding to the amount of the contribution for the purpose of paying the Purchase Price with which the Silent partner agrees.</li>
        </ol>


    {{--END New version silent partner--}}


    <h3 class="text-center">@lang('member/contracts/sp.a7', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.a71', [], 'sk')</li>

        <li>@lang('member/contracts/sp.32', [], 'sk')</li>

        <li>@lang('member/contracts/sp.33', [], 'sk')</li>

        <li>@lang('member/contracts/sp.34', [], 'sk')</li>

        <li>@lang('member/contracts/sp.35', [], 'sk')</li>

        <li>@lang('member/contracts/sp.36', [], 'sk')</li>
    </ol>


        <h3 class="text-center lang">Article VIII <br>
            Final provisions</h3>

        <ol class="lang">
            <li>CEE Real Estate Group s.r.o. is authorized to dispose of the funds representing the contribution which the Silent partner has made in accordance with Art. III, par. 3 of this Agreement at its sole discretion, until such time as, in accordance with this Agreement, CEE Real Estate Group s.r.o. is to use the funds in question for the purpose set forth in this Agreement.</li>

            <li>Relations between the Parties not governed by the Agreement shall be governed by the relevant provisions of the Commercial Code and other applicable legal regulations.</li>

            <li>Agreement shall enter into force and effect on the date of its signature by both Parties.</li>

            <li>Any changes to the Agreement may only be made by written agreement of the Parties in the form of written amendments signed by both Parties.</li>

            <li>The contract is made in 2 counterparts, each of which has the validity of the original. Each Contracting Party shall receive one counterpart.</li>
            <li>The Parties declare that they have read this Agreement, have fully understood its content, it has been written on the basis of their free will, that its text is an understandable expression of their free and seriously expressed will that they do not enter into they attach their signatures to the sign of consent.</li>
        </ol>


    <table class="signatures">
        <tr>
            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.debtor', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                        @lang('member/contracts/tdo.debtor'):
            </span>
                @endif
            </td>

            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.creditor', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                        @lang('member/contracts/tdo.creditor'):
            </span>
                @endif
            </td>
        </tr>

        <tr>
            <td class="signature">
                DSS2........................................<br>
                {{ config('cee.director') }}<br>
                Managing Director<br>
                CEE Real Estate Group s.r.o.<br>
                Za Šírava developmet, s.r.o.<br>
                (v zastúpení CEE Real Estate Group, s.r.o.<br>
                na základe splnomocnenia)
            </td>

            <td class="signature">
                DSS1........................................<br>
                {{ $objOrder->name }} {{ $objOrder->surname }}
                Silent Partner<br>
                @if(isset($objOrder->company))
                    <br>{{ $objOrder->company->name }}
                @endif
            </td>
        </tr>
    </table>
@endsection