<!DOCTYPE html>
<html lang="uk">
<head>
    <? include '_top.php';?>
    <title>Eurobud - Calculator</title>

</head>
<body> 
<!-- LOADER -->
<div id="loader-wrapper"></div>

<div id="content-block">
    <!-- HEADER -->
    <header class="header without-banner">
        <? include '_header.php';?>
    </header>

    <!-- MAIN CONTENT -->
    <main class="content">
        <div class="spacer-header"></div>

        <div class="section sp-top-sm sp-bottom-xl">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-8">

                        <div class="w-bold h2 md text-center">Калькулятор</div>
                        <div class="page-des text-center">Обчислення необхідної товщини пінопласту для утеплення фасаду</div>
                        
                        <form action="" id="calculator">
                            
                        

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="calculator-input-wrap">

                                        <label>
                                            <div class="label color-secondary">Місто/область*</div>
                                            <select id="region" class="select">

                                                <option value>-- Выберите город/область --</option><option value="3.3">Львовская обл. </option><option value="3.3">Ровенская обл. </option><option value = "3.3">Ивано-Франковская обл. </option><option value="3.3">Волынская обл. </option><option value="3.3">Тернопольская обл. </option><option value = "3.3" >Хмельницкая обл. </option><option value="3.3">Черновецкая обл. </option><option value="2.8">Закарпатская обл. </option><option value="3.3">Житомирская обл. </option><option value="3.3">Винницкая обл. </option><option value="3.3">Черниговская обл. </option><option value="3.3">Киевская обл. </option><option value = "3.3">Черкасская обл. </option><option value="2.8">Одесская обл. </option><option value="3.3">Кировоградская обл. </option><option value = "2.8" >Николаевская обл. </option><option value="3.3">Сумская обл. </option><option value="3.3">Полтавская обл. </option><option value="3.3">Днепропетровская обл. </option><option value="2.8">Херсонская обл. </option><option value="3.3">Харьковская обл. </option><option value="2.8">Запорожская обл. </option><option value = "3.3">Луганская обл. </option><option value="3.3">Донецкая обл. </option><option value="2.8">Крым </option>

                                            </select>

                                            <div class="text-sm">Кожна область, має свій коефіцієнт опору тепловіддачі</div>

                                        </label>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="calculator-input-wrap">
                                        
                                        <label>

                                            <div class="label color-secondary">Товщина стіни (см.)*</div>
                                            <input class="input input-number" id="wall_thickness" type="text" placeholder="Введіть товщину">
                                            <div class="text-sm">Введіть значення товщини стіни у сантиметрах. Наприклад: 6</div>

                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="calculator-input-wrap">
                                        
                                        <label>
                                            <div class="label color-secondary">Матеріал, з якого зроблена стіна*</div>
                                            <select class="select" id="material_type" name="material_type">
                                                <option value="_">-- Виберите материал --</option><option value="cement_sand_solution_cc">Кладка кирпичная из полнотельного обычного глиняного кирпича на цементно-песчаном растворе</option><option value="cement_slag_solution_cc">Кладка кирпичная из полнотельного обычного глиняного кирпича на цементно-шлаковом растворе </option><option value="cement_sand_silicat_cc">Кладка кирпичная из полнотельного обычного силикатного кирпича на цементно-пещаном растворе</option><option value="porotherm_25">Блоки керамические Porotherm 25 P+W</option><option value="porotherm_30">Блоки керамические Porotherm 30 P+W</option><option value="ceramic_hollow">Кирпичная кладка с полым керамическим кирпичем на цементно-песчаном растворе</option><option value="kermesitecement_blocks">Блоки кремнезитоцементные</option><option value="eclc_on_slag">Блоки керамзитошлакобетонные на цементно-песчаном растворе</option><option value="kermesitecement_blocks_limy_solution">Блоки кремнезитоцементные на известковом растворе из сиопорового и кварцевого песка</option><option value="cellular_concrete">Бетон ноздреватый</option><option value="foamed_concrete">Газо- и пенозолобетон</option><option value="eclc_on_keramzite_sand">Керамзитобетон на керамзитовом песке</option><option value="eclc_on_quartz_sand">Керамзитобетон на кварцевом песке с поризацией</option><option value="eclc_on_pearlitic_sand">Керамзитобетон на перлитовом песке</option><option value="eclc">Керамзитошлакобетон</option><option value="pearlitic_concrete">Перлитобетон</option><option value="slag_pumice_concrete">Шлакопемзобетон</option><option value="granulated_slag_concrete">Бетон на доменных гранулированных шлаках</option><option value="gravel_ash_concrete">Бетон на зольном гравие</option><option value="ferroconcrete">Железобетон</option><option value="concrete_on_gravel_or_rubble">Бетон на гравие или щебне из природного камня</option><option value="cement_sand_mortar">Раствор цементно-песчаный</option><option value="complex_solution">Раствор сложный (песок, известь, цемент)</option><option value="lime_sand_mortar">Раствор известково-песчаный</option><option value="granite">Плиты и изделия из природного камня: гранит, гнейс и базальт</option><option value="marble">Плиты и изделия из природного камня: мармур</option><option value="limestone">Плиты и изделия из природного камня: известняк</option><option value="floor_ceramic_plates">Плиты керамические для пола</option><option value="slabs_of_plaster">Плиты из гипса</option><option value="ps_across_fibers">Сосна и ель поперек волокон</option><option value="ps_along_fibers">Сосна и ель вдоль волокон</option>
                                            </select>
                                            <div class="text-sm">Кожен матеріал, має свій коефіцієнт теплопровідності.</div>

                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="calculator-input-wrap">
                                        <label>
                                            <div class="label color-secondary">Густина матеріалу*</div>
                                            <select class="select" id="material" name="material">
                                                <option value>-- Выберите плотность материала --</option>
                                            </select>
                                            
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="calculator-input-wrap">
                                        <div class="label color-secondary">Пінополістирольна плита*</div>
                                        <select class="select" id="plate_type" name="plate_type">
                                            <option value>-- Выберите тип плиты --</option><option value="0.045">Евробуд 15 Silver - Styrotherm EPS S</option><option value="0.044">Евробуд 25 Eko - EPS 30</option><option value="0.043">Евробуд 25 Silver - EPS 40</option><option value="0.042">Евробуд 25 Gold - EPS 50</option><option value="0.040">Евробуд 25 Platinum - EPS 70</option><option value="0.039">Добрый пенопласт ПСБ-С-25 - EPS 80</option><option value="0.038">Евробуд 35 Eko - EPS 90</option><option value="0.035">Добрый пенопласт ПСБ-С-35 - EPS 150</option><option value="0.034">Евробуд 50 Gold - EPS 200</option><option value="0.033">Добрый пенопласт ПСБ-С-50 - EPS 250</option>
                                        </select>
                                        
                                    </div>
                                </div>

                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary blue" type="submit" id="calculator-result-button">
                                    <span>ОБЧИСЛИТИ</span>
                                    <span class="anim-border"></span>
                                </button>
                            </div>

                        </form>

                        <div class="calculator-informer">
                            <div class="text text-lg">Згідно введених Вами даних, обчислена товщина пінопласту складає:</div>
                            <div class="calculator-informer-val h3 w-bold color-blue">
                                <span id="calculator-result"><!-- 12.95 --> --</span> см
                            </div>
                        </div>

                    </div>
                </div>

                
            </div>
            
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <? include '_footer.php';?>
    </footer>

    <div class="wrapper-right-bt">
        <div class="calculator deactivate">
            <div class="icon">
                <img src="img/calculator.svg" data-i-src="img/calculator.svg" alt="" class="imgLoaded">
            </div>
            <div class="text">калькулято</div>
        </div>
    </div>

</div>

<!-- POPUPS -->
<div class="popup-wrapper">
    <div class="bg-layer"></div>
    <? include '_popups.php';?>
</div>

<? include '_bottom.php';?>

<script src="./js/calculator.js"></script>

<script type="text/javascript">
    var Messages = {
                         ERROR_REGION: "Выберите город/область",
                         ERROR_WALL_THICKNESS: "Укажите толщину стены",
                         ERROR_PLATE_TYPE: "Выберите тип пиност. плиты",
                         ERROR_MATERIAL: "Выберите плотность материала стены",
                         ERROR_MATERIAL_TYPE: "Выберите тип материала стены",
                         LABEL_DENSITY: "-- Выберите плотность материала --"
                    };
        var FormulaParams = {
                             ERROR_REGION: "Выберите город/область",
                             ERROR_WALL_THICKNESS: "Укажите толщину стены",
                             ERROR_PLATE_TYPE: "Выберите тип пиност. плиты",
                             ERROR_MATERIAL: "Выберите плотность материала стены",
                             ERROR_MATERIAL_TYPE: "Выберите тип материала стены",
                             LABEL_DENSITY: "-- Выберите плотность материала --"

                        };
        var FormulaUnity = 
                        {

                            RQ_UNITY : " м<sup>2</sup> * К / Вт",
                            S1_UNITY : " м.",
                            LYAMBDA_P_UNITY : " Вт / (м * К)",  
                            LYAMBDA_D_UNITY : " Вт / (м * К)"
                        };
    Calculator.setMaterials(Materials);
    Calculator.setMessages(Messages);
    Calculator.setFormulaParams(FormulaParams);
    Calculator.setFormulaUnity(FormulaUnity);
</script>

</body>
</html>