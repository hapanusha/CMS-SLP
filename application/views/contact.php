<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <!-- ./row -->
        <div class="row">
            <!--  original tab main wrapper          <div class="col-12 col-sm-6 col-lg-4">-->
            <div class="col-12 ">


                <div class="card-body">
                    <h2>contact </h2>
                    <div class="card card-info">

                        <!-- 1st tab form start -->
                        <form class="form-horizontal" action="/cms/index.php/add_user">
                            <div class="card-body">

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Officer Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Officer Number">
                                    </div>
                                </div>
                                

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Name with Initials</label>
                                        <input type="text" class="form-control" placeholder="Enter Name with Initials">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Calling Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your calling Name">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" checked>
                                            <label class="form-check-label">Male </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" >
                                            <label class="form-check-label">Female </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label> Rank</label>

                                        <select class="form-control">
                                            <option value="0">-Select Rank-</option>
                                            <option value="57">Inspector General of Police (IGP)</option>
                                            <option value="61">Senior Deputy Inspector General of Police (SDIG)</option>
                                            <option value="63">Deputy Inspector General of Police (DIG)</option>
                                            <option value="56">Senior Superintendent of Police (SSP)</option>
                                            <option value="42">Superintendent of Police (SP)</option>
                                            <option value="48">Assistant Superintendent of Police (ASP)</option>
                                            <option value="43">Chief Inspector of police (CIP)</option>
                                            <option value="50">Inspector of police (IP)</option>
                                            <option value="51">Sub Inspector of police (SI)</option>
                                            <option value="44">Police Sergeant Major (PSM)</option>
                                            <option value="45">Police Sergeant Class 1 (PS)</option>
                                            <option value="66">Police Sergeant Class 2 (PS)</option>
                                            <option value="55">Police Constable Class 1 (PC)</option>
                                            <option value="59">Police Constable Class 2 (PC)</option>
                                            <option value="52">Police Constable Class 3 (PC)</option>
                                            <option value="46">Police Constable Class 4 (PC)</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Attached Police station</label>
                                        <select class="form-control">
                                            <option value="0">-Select Police station-</option>

                                            <option value="325">Agarapathna</option>
                                            <option value="111">Ahangama </option>
                                            <option value="112">Ahungalla</option>
                                            <option value="1">Akkaraipattu</option>
                                            <option value="113">Akmeemana</option>
                                            <option value="297">Akuressa</option>
                                            <option value="423">Alampil</option>
                                            <option value="217">Alawathugoda</option>
                                            <option value="257">Alawwa</option>
                                            <option value="194">Aluthgama</option>
                                            <option value="114">Ambalangoda</option>
                                            <option value="164">Ambalantota</option>
                                            <option value="258">Ambanpola</option>
                                            <option value="2">Ampara</option>
                                            <option value="350">Anamaduwa</option>
                                            <option value="67">Angulana</option>
                                            <option value="165">Angunukolapelessa</option>
                                            <option value="195">Anguruwatota</option>
                                            <option value="218">Ankumbura</option>
                                            <option value="16">Anuradhapura</option>
                                            <option value="344">Aralaganvila</option>
                                            <option value="244">Aranayaka</option>
                                            <option value="177">Atchuvely </option>
                                            <option value="68">Athurugiriya</option>
                                            <option value="450">Avissawella</option>
                                            <option value="69">Awissawella</option>
                                            <option value="365">Ayagama</option>
                                            <option value="54">Ayithiyamalai </option>
                                            <option value="311">Badalkumbura</option>
                                            <option value="115">Baddegama</option>
                                            <option value="39">Badulla</option>
                                            <option value="196">Baduraliya</option>
                                            <option value="345">Bakamoona</option>
                                            <option value="3">Bakkiella</option>
                                            <option value="219">Balagolla</option>
                                            <option value="366">Balangoda</option>
                                            <option value="70">Bambalapitiya</option>
                                            <option value="197">Bandaragama</option>
                                            <option value="40">Bandarawela</option>
                                            <option value="55">Batticaloa</option>
                                            <option value="166">Beliatta</option>
                                            <option value="116">Bentota</option>
                                            <option value="198">Beruwala</option>
                                            <option value="312">Bibila</option>
                                            <option value="259">Bingiriya</option>
                                            <option value="136">Biyagama</option>
                                            <option value="326">Bogawanthalawa</option>
                                            <option value="71">Boralesgamuwa</option>
                                            <option value="72">Borella</option>
                                            <option value="454">Bulathkohupitiya</option>
                                            <option value="245">Bulathkohupitiya</option>
                                            <option value="199">Bulathsinhala</option>
                                            <option value="313">Buttala</option>
                                            <option value="457">CCD</option>
                                            <option value="4">Central Camp </option>
                                            <option value="424">Chalai</option>
                                            <option value="178">Chavakachcheri</option>
                                            <option value="5">Chavalakade</option>
                                            <option value="351">Chilaw</option>
                                            <option value="386">China Bay</option>
                                            <option value="179">Chunnakam </option>
                                            <option value="442">CID</option>
                                            <option value="73">Cinnamon Garden</option>
                                            <option value="440">Colombo Fraud Investigation Bureau</option>
                                            <option value="74">Dam street</option>
                                            <option value="6">Damana</option>
                                            <option value="314">Dambagalla</option>
                                            <option value="315">Dambagalla</option>
                                            <option value="289">Dambulla</option>
                                            <option value="434">Dambulla</option>
                                            <option value="352">Dankotuwa</option>
                                            <option value="220">Davulagala</option>
                                            <option value="246">Dedigama</option>
                                            <option value="7">Dehiattakandiya</option>
                                            <option value="75">Dehiwala</option>
                                            <option value="180">Delft</option>
                                            <option value="76">Dematagoda</option>
                                            <option value="298">Deniyaya</option>
                                            <option value="453">Deraniyagala</option>
                                            <option value="247">Deraniyagala</option>
                                            <option value="299">Dickwella</option>
                                            <option value="327">Divulapathana</option>
                                            <option value="137">Divulapitiya</option>
                                            <option value="41">Diyathalawa</option>
                                            <option value="200">Dodangoda</option>
                                            <option value="138">Dompe</option>
                                            <option value="260">Dummalasooriya</option>
                                            <option value="367">Eheliyagoda</option>
                                            <option value="426">Elephantpass</option>
                                            <option value="42">Ella</option>
                                            <option value="117">Elpitiya</option>
                                            <option value="368">Embilipitiya</option>
                                            <option value="17">Eppawala</option>
                                            <option value="56">Eravur </option>
                                            <option value="43">Etampitiya</option>
                                            <option value="77">Forshore</option>
                                            <option value="78">Fort</option>
                                            <option value="221">Galagedara</option>
                                            <option value="222">Galaha</option>
                                            <option value="18">Galenbidunuwawe</option>
                                            <option value="290">Galewela</option>
                                            <option value="435">Galewela</option>
                                            <option value="261">Galgamuwa</option>
                                            <option value="19">Galkiriyagama</option>
                                            <option value="118">Galle</option>
                                            <option value="120">Galle</option>
                                            <option value="119">Galle Harbour</option>
                                            <option value="20">Galnewa</option>
                                            <option value="443">Gampaha</option>
                                            <option value="223">Gampola</option>
                                            <option value="300">Gandara</option>
                                            <option value="139">Ganemulla</option>
                                            <option value="328">Ginigathhena</option>
                                            <option value="44">Girandurukotte</option>
                                            <option value="262">Giribawa</option>
                                            <option value="263">Giriulla</option>
                                            <option value="369">Godakawela</option>
                                            <option value="264">Gokarella</option>
                                            <option value="370">Gomarankadawela</option>
                                            <option value="316">Gonaganara</option>
                                            <option value="79">Grandpass</option>
                                            <option value="121">Habaraduwa</option>
                                            <option value="21">Habarana</option>
                                            <option value="301">Hakmana</option>
                                            <option value="167">Hambantota</option>
                                            <option value="317">Hambegamuwa</option>
                                            <option value="80">Hanwella</option>
                                            <option value="45">Haputhale</option>
                                            <option value="81">Harbour</option>
                                            <option value="224">Hasalaka</option>
                                            <option value="225">Hatharaliyadda</option>
                                            <option value="226">Hatton</option>
                                            <option value="248">Hemmathagama</option>
                                            <option value="265">Hettipola</option>
                                            <option value="22">Hidogama</option>
                                            <option value="122">Hikkaduwa</option>
                                            <option value="346">Hingurakgoda</option>
                                            <option value="123">Hiniduma </option>
                                            <option value="82">Homagama</option>
                                            <option value="201">Horana</option>
                                            <option value="23">Horowpothana</option>
                                            <option value="168">Hungama</option>
                                            <option value="181">Ilavali</option>
                                            <option value="410">Illuppukadawai</option>
                                            <option value="8">Inginiyagala</option>
                                            <option value="202">Ingiriya</option>
                                            <option value="140">Ja-Ela</option>
                                            <option value="182">Jaffna</option>
                                            <option value="141">Kadawatha</option>
                                            <option value="227">Kadugannawa</option>
                                            <option value="24">Kahatagasdigiliya</option>
                                            <option value="83">Kahathuduwa</option>
                                            <option value="371">Kahawatta</option>
                                            <option value="372">Kalawana</option>
                                            <option value="57">Kalkuda</option>
                                            <option value="9">Kalmunai</option>
                                            <option value="353">Kalpitiya</option>
                                            <option value="373">Kalthota</option>
                                            <option value="203">Kaluthara North</option>
                                            <option value="204">Kaluthara South</option>
                                            <option value="58">Kaluwanchikudy </option>
                                            <option value="302">Kamburupitiya</option>
                                            <option value="446">kanagarayamkulam</option>
                                            <option value="416">Kanagarayankulam</option>
                                            <option value="303">Kananke</option>
                                            <option value="46">Kandaketiya</option>
                                            <option value="142">Kandana</option>
                                            <option value="228">Kandy</option>
                                            <option value="183">Kankesanthurai </option>
                                            <option value="387">Kantalai</option>
                                            <option value="59">Karadiyanaru</option>
                                            <option value="124">Karandeniya</option>
                                            <option value="354">Karuwalagaswewa</option>
                                            <option value="229">KAT</option>
                                            <option value="318">Kataragama</option>
                                            <option value="60">Kattankudy</option>
                                            <option value="230">Katugasthota</option>
                                            <option value="143">Katunayaka</option>
                                            <option value="266">Katupotha</option>
                                            <option value="169">Katuwana</option>
                                            <option value="184">Kayts</option>
                                            <option value="25">Kebithigollewa</option>
                                            <option value="249">Kegalle</option>
                                            <option value="26">Kekirawa</option>
                                            <option value="144">Kelaniya</option>
                                            <option value="84">Keselwatta</option>
                                            <option value="411">Kilinochchi</option>
                                            <option value="388">Kinniya</option>
                                            <option value="145">Kiribathgoda</option>
                                            <option value="374">Kiriella</option>
                                            <option value="146">Kirindiwela</option>
                                            <option value="85">Kirulapone</option>
                                            <option value="455">Kithulgala</option>
                                            <option value="250">Kithulgala</option>
                                            <option value="267">Kobeigane</option>
                                            <option value="147">Kochchikade</option>
                                            <option value="185">Kodikamam </option>
                                            <option value="205">Koholana South</option>
                                            <option value="86">Kohuwala</option>
                                            <option value="61">Kokkadichcholai</option>
                                            <option value="87">Kollupitiya</option>
                                            <option value="375">Kolonna</option>
                                            <option value="186">Kopay</option>
                                            <option value="88">Kosgama</option>
                                            <option value="89">Kosgoda</option>
                                            <option value="402">Kosgoda</option>
                                            <option value="47">Koslanda</option>
                                            <option value="355">Koswatta</option>
                                            <option value="148">Kotadeniyawa</option>
                                            <option value="90">Kotahena</option>
                                            <option value="268">Kotawehera</option>
                                            <option value="329">Kothmale</option>
                                            <option value="91">Kottawa</option>
                                            <option value="389">Kuchaveli</option>
                                            <option value="269">Kuliyapitiya </option>
                                            <option value="231">Kurunduwatta</option>
                                            <option value="270">Kurunegala</option>
                                            <option value="376">Kuruwita</option>
                                            <option value="377">Kuttigala</option>
                                            <option value="291">Laggala</option>
                                            <option value="431">Laggala</option>
                                            <option value="330">Lindula</option>
                                            <option value="48">Lunugala</option>
                                            <option value="170">Lunugamvehera</option>
                                            <option value="356">Madampe</option>
                                            <option value="406">Madu</option>
                                            <option value="49">Madulsima</option>
                                            <option value="27">Maha Vilachchiya</option>
                                            <option value="10">Mahaoya</option>
                                            <option value="92">Maharagama</option>
                                            <option value="271">Mahawa</option>
                                            <option value="292">Mahawela</option>
                                            <option value="428">Mahawela</option>
                                            <option value="50">Mahiyanganaya</option>
                                            <option value="93">Maligawatta</option>
                                            <option value="418">Mallavi</option>
                                            <option value="448">Mallavi</option>
                                            <option value="456">Malwathuhiripitiya</option>
                                            <option value="232">Manikhinna</option>
                                            <option value="187">Manipay</option>
                                            <option value="417">Mankulam</option>
                                            <option value="447">Mankulam</option>
                                            <option value="286">Mannar</option>
                                            <option value="404">Mannar</option>
                                            <option value="94">Maradana</option>
                                            <option value="357">Maravila</option>
                                            <option value="331">Maskeliya</option>
                                            <option value="62">Matale</option>
                                            <option value="427">Matale</option>
                                            <option value="437">Matale</option>
                                            <option value="304">Matara</option>
                                            <option value="206">Mathugama</option>
                                            <option value="332">Mathurata</option>
                                            <option value="251">Mawanella</option>
                                            <option value="305">Mawarala</option>
                                            <option value="272">Mawathagama</option>
                                            <option value="319">Medagama</option>
                                            <option value="28">Medawachchiya</option>
                                            <option value="347">Medirigiriya</option>
                                            <option value="207">Meegahathenna</option>
                                            <option value="149">Meegahawatta </option>
                                            <option value="273">Meegalewa</option>
                                            <option value="125">Meetiyagoda</option>
                                            <option value="171">Middeniya</option>
                                            <option value="29">Mihintale</option>
                                            <option value="30">Mihinthale</option>
                                            <option value="438">Minneriya</option>
                                            <option value="150">Minuwangoda</option>
                                            <option value="151">Mirigama</option>
                                            <option value="95">Mirihana </option>
                                            <option value="96">Modara</option>
                                            <option value="320">Moneragala</option>
                                            <option value="208">Moragahahena</option>
                                            <option value="97">Moratumulla</option>
                                            <option value="98">Moratuwa</option>
                                            <option value="306">Morawaka</option>
                                            <option value="390">Morawewa</option>
                                            <option value="99">Mount Laviniya</option>
                                            <option value="420">Mullaitivu</option>
                                            <option value="100">Mulleriyawa</option>
                                            <option value="358">Mundalama</option>
                                            <option value="419">Murikandi</option>
                                            <option value="287">Murunkan</option>
                                            <option value="408">Murunkan</option>
                                            <option value="391">Muttur</option>
                                            <option value="413">Nachchikuda</option>
                                            <option value="126">Nagoda</option>
                                            <option value="333">Nallathannita</option>
                                            <option value="334">Nanuoya</option>
                                            <option value="101">Narahenpita</option>
                                            <option value="274">Narammala</option>
                                            <option value="293">Naula</option>
                                            <option value="432">Naula</option>
                                            <option value="102">Nawagamuwa</option>
                                            <option value="459">Nawagaththegama</option>
                                            <option value="359">Nawagattegama</option>
                                            <option value="233">Nawalapiaitya</option>
                                            <option value="234">Nawalapitiya</option>
                                            <option value="421">Nedunkerni</option>
                                            <option value="449">Nedunkerni</option>
                                            <option value="152">Negombo</option>
                                            <option value="188">Nelliaddy</option>
                                            <option value="127">Neluwa</option>
                                            <option value="275">Nikaweratiya</option>
                                            <option value="153">Nittambuwa</option>
                                            <option value="378">Nivithigala</option>
                                            <option value="31">Nochchiyagama</option>
                                            <option value="335">Norton Bridge</option>
                                            <option value="336">Norwood</option>
                                            <option value="337">Nuwara Eliya</option>
                                            <option value="422">Oddusudan</option>
                                            <option value="414">Omantha</option>
                                            <option value="444">Omantha</option>
                                            <option value="379">Opanayaka</option>
                                            <option value="32">Padaviya</option>
                                            <option value="11">Padiyathalawa</option>
                                            <option value="103">Padukka</option>
                                            <option value="189">Palaly</option>
                                            <option value="360">Pallama</option>
                                            <option value="439">Palugaswewa</option>
                                            <option value="154">Pamunugama</option>
                                            <option value="209">Panadura (North)</option>
                                            <option value="210">Panadura (South)</option>
                                            <option value="211">Panadura South</option>
                                            <option value="380">Panamura</option>
                                            <option value="276">Pannala</option>
                                            <option value="235">Panwila</option>
                                            <option value="425">Paranthan</option>
                                            <option value="51">Passara</option>
                                            <option value="212">Payagala </option>
                                            <option value="155">Peliyagoda </option>
                                            <option value="236">Peradeniya</option>
                                            <option value="104">Pettah</option>
                                            <option value="105">Piliyandala</option>
                                            <option value="252">Pindeniya</option>
                                            <option value="307">Pitabeddara</option>
                                            <option value="128">Pitigala</option>
                                            <option value="129">Poddala</option>
                                            <option value="190">Point Pedro</option>
                                            <option value="277">Polgahawela</option>
                                            <option value="441">Police Clearance Office</option>
                                            <option value="338">Polonnaruwa</option>
                                            <option value="348">Polonnaruwa</option>
                                            <option value="278">Polpithigama</option>
                                            <option value="412">Poonarya</option>
                                            <option value="279">Pothuhera</option>
                                            <option value="12">Pothuvil</option>
                                            <option value="280">Potuhera</option>
                                            <option value="156">Pugoda</option>
                                            <option value="445">Puliyamkulam</option>
                                            <option value="415">Puliyankulam</option>
                                            <option value="392">Pulmoddai</option>
                                            <option value="33">Pulmude</option>
                                            <option value="339">Pundaluoya</option>
                                            <option value="237">Pussellawa</option>
                                            <option value="361">Puttalam</option>
                                            <option value="458">Puttalam</option>
                                            <option value="340">Ragala</option>
                                            <option value="157">Ragama</option>
                                            <option value="34">Rajanganaya</option>
                                            <option value="381">Rakwana</option>
                                            <option value="281">Rambadagalla</option>
                                            <option value="253">Rambukkana</option>
                                            <option value="238">Rangala</option>
                                            <option value="282">Rasnayakapura</option>
                                            <option value="130">Rathgama</option>
                                            <option value="382">Rathnapura</option>
                                            <option value="294">Rattota</option>
                                            <option value="429">Rattota</option>
                                            <option value="430">Rattota</option>
                                            <option value="451">Ruwanwella</option>
                                            <option value="254">Ruwanwella</option>
                                            <option value="362">Saliyawewa</option>
                                            <option value="13">Samanthurai</option>
                                            <option value="158">Sapugaskanda</option>
                                            <option value="159">Seeduwa</option>
                                            <option value="393">Serunuwara</option>
                                            <option value="400">Settikulam</option>
                                            <option value="321">Sewanagala</option>
                                            <option value="295">Sigiriya</option>
                                            <option value="436">Sigiriya</option>
                                            <option value="407">Silavathura</option>
                                            <option value="322">Siyambalanduwa</option>
                                            <option value="106">Slave Island</option>
                                            <option value="394">Somapura</option>
                                            <option value="172">Sooriyawewa</option>
                                            <option value="395">Sri Pura</option>
                                            <option value="288">TalaiMannar</option>
                                            <option value="173">Tangalle</option>
                                            <option value="191">Tellipallai</option>
                                            <option value="405">Thalai Mannar</option>
                                            <option value="107">Thalangama</option>
                                            <option value="239">Thalathuoya</option>
                                            <option value="35">Thalawa</option>
                                            <option value="341">Thalawakele</option>
                                            <option value="403">Thambalagamuwa</option>
                                            <option value="36">Thambuttegama</option>
                                            <option value="396">Thampalakamam</option>
                                            <option value="323">Thanamalwila</option>
                                            <option value="37">Thanthirimale</option>
                                            <option value="213">Thebuwana</option>
                                            <option value="240">Theldeniya</option>
                                            <option value="241">Theldiniya</option>
                                            <option value="131">Thelikada</option>
                                            <option value="308">Thihagoda</option>
                                            <option value="214">Thiniyawala</option>
                                            <option value="38">Thirappane</option>
                                            <option value="14">Thirukkovil</option>
                                            <option value="174">Tissamaharama</option>
                                            <option value="397">Trincomalee</option>
                                            <option value="242">Udadumbara</option>
                                            <option value="342">Udapussellawa</option>
                                            <option value="383">Udawalawa</option>
                                            <option value="132">Udugama</option>
                                            <option value="15">Uhana</option>
                                            <option value="398">Uppuveli</option>
                                            <option value="133">Uragasmanhandiya</option>
                                            <option value="309">Urubokka</option>
                                            <option value="52">Uva Paranagama</option>
                                            <option value="63">Vakarai </option>
                                            <option value="64">Valaichenai </option>
                                            <option value="192">Valvettithurai </option>
                                            <option value="363">Vanathavilluwa</option>
                                            <option value="399">Vanela </option>
                                            <option value="65">Vavunativu</option>
                                            <option value="401">Vavuniya</option>
                                            <option value="193">Vedducoddai </option>
                                            <option value="409">Vedithalativu</option>
                                            <option value="66">Vellaveli</option>
                                            <option value="163">Veyangoda</option>
                                            <option value="215">Wadduwa</option>
                                            <option value="343">Walapane</option>
                                            <option value="175">Walasmulla</option>
                                            <option value="134">Wanduramba</option>
                                            <option value="255">Warakapola</option>
                                            <option value="283">Wariyapola</option>
                                            <option value="160">Wattala</option>
                                            <option value="243">Wattegama</option>
                                            <option value="161">Weeragula</option>
                                            <option value="176">Weeraketiya</option>
                                            <option value="284">Weerambugedara</option>
                                            <option value="310">Weligama</option>
                                            <option value="384">Weligepola</option>
                                            <option value="108">Welikada</option>
                                            <option value="349">Welikanda</option>
                                            <option value="53">Welimada</option>
                                            <option value="216">Welipenna</option>
                                            <option value="162">Weliweriya</option>
                                            <option value="109">Wellampitiya</option>
                                            <option value="285">wellawa</option>
                                            <option value="110">Wellawatta</option>
                                            <option value="324">Wellawaya</option>
                                            <option value="364">Wennappuwa</option>
                                            <option value="385">Wewelwatta</option>
                                            <option value="296">Wilgamuwa</option>
                                            <option value="433">Wilgamuwa</option>
                                            <option value="135">Yakkalamulla</option>
                                            <option value="256">Yatiyanthota</option>
                                            <option value="452">Yatiyantota</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label> Position in current station</label>

                                        <select class="form-control">
                                            <option value="0">-Select position-</option>
                                            <option value="57">Officer in charge</option>
                                            <option value="61">Head of Division</option>
                                            <option value="63">a</option>
                                            <option value="56">b</option>
                                            <option value="42">c</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>NIC</label>
                                        <input type="text" class="form-control" placeholder="Enter NIC">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Mobile Number"><br>
                                        <input type="text" class="form-control" placeholder="Enter alterntive contact Number">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>


                                <div class="col-md-8">
                                    <!-- textarea -->
                                    <div class="form-group" >
                                        <label>Address</label>
                                        <textarea class="form-control" rows="5" placeholder="Your Address"></textarea>
                                    </div>
                                </div>





                                <div class="col-md-10">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Highest Academic Qualification Achieved</label>
                                        <input type="text" class="form-control" placeholder="Enter Highest Academic Qualifiction Achieved">
                                    </div>
                                </div>


                                <div class="col-md-10">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Other Academic Qualification Achieved. </label>
                                        <p>(Enter qualification from highest to the lowest)</p>
                                        <textarea class="form-control" rows="8" placeholder="Write your complain in brief"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-10">
                                    <!--                    <div class="form-group">-->
                                    <label>Add a profile picture</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose profile picture</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id=""><B>Upload</b></span>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-md-10">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label> System Privilege Level</label>

                                        <select class="form-control">
                                            <option value="0">System Administrator</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Managet</option>
                                            <option value="3">Normal User</option>
                                        </select>
                                    </div>
                                </div>

                                

                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Default Password</label>
                                        <input type="password" class="form-control" >
                                    </div>
                                </div>

                               

                                <br> <br>

                                <div class="col-sm-4">

                                    <button type="submit" class="btn btn-info">Add</button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>

                                </div>



                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                        </form>
                    </div>  

                </div>
                <!-- /.card -->

            </div>


        </div>
        <!-- /.row -->    














    </section>



</div>
<!-- /.content-wrapper -->

