 <?php
	$servername = "localhost";
	$username = "id3966849_rootverdex";
	$password = "rootverdex";
	$dbname = "id3966849_verdex";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";

	@session_start();

	$user = $_SESSION["email"];

	
	$sql = "SELECT * FROM distribuidor";
	$result = $conn->query($sql);
	$i = 0;
	$arr = array();
	while ($row = $result->fetch_assoc()) {
		$arr["datos"][$i]["AcelgaT"] = $row["AcelgaA"];
$arr["datos"][$i]["Aguacate_Hass_ExtraT"] = $row["Aguacate_Hass_ExtraA"];
$arr["datos"][$i]["Aguacate_Hass_Extra_PremT"] = $row["Aguacate_Hass_Extra_PremA"];
$arr["datos"][$i]["Aguacate_Hass_SuperT"] = $row["Aguacate_Hass_SuperA"];
$arr["datos"][$i]["Aguacate_Hass_Super_PremT"] = $row["Aguacate_Hass_Super_PremA"];
$arr["datos"][$i]["Aguacate_PrimeraT"] = $row["Aguacate_PrimeraA"];
$arr["datos"][$i]["Aguacate_Primera_PremiumT"] = $row["Aguacate_Primera_PremiumA"];
$arr["datos"][$i]["Ajo_MachoT"] = $row["Ajo_MachoA"];
$arr["datos"][$i]["Ajo_NacionalT"] = $row["Ajo_NacionalA"];
$arr["datos"][$i]["AjonjoliT"] = $row["AjonjoliA"];
$arr["datos"][$i]["Ajonjoli_EnmieladoT"] = $row["Ajonjoli_EnmieladoA"];
$arr["datos"][$i]["AlbahacarT"] = $row["AlbahacarA"];
$arr["datos"][$i]["Almendra_EnteraT"] = $row["Almendra_EnteraA"];
$arr["datos"][$i]["Almendra_FileteadaT"] = $row["Almendra_FileteadaA"];
$arr["datos"][$i]["AmarantoT"] = $row["AmarantoA"];
$arr["datos"][$i]["AnguT"] = $row["AnguA"];
$arr["datos"][$i]["Anis_EstrellaT"] = $row["Anis_EstrellaA"];
$arr["datos"][$i]["ApioT"] = $row["ApioA"];
$arr["datos"][$i]["Arandanos_SecosT"] = $row["Arandanos_SecosA"];
$arr["datos"][$i]["ArrozT"] = $row["ArrozA"];
$arr["datos"][$i]["Azucar_EstandarT"] = $row["Azucar_EstandarA"];
$arr["datos"][$i]["Azucar_MorenaT"] = $row["Azucar_MorenaA"];
$arr["datos"][$i]["Berengena_MoradaT"] = $row["Berengena_MoradaA"];
$arr["datos"][$i]["Berengena_RayadaT"] = $row["Berengena_RayadaA"];
$arr["datos"][$i]["BerrosT"] = $row["BerrosA"];
$arr["datos"][$i]["BetabelT"] = $row["BetabelA"];
$arr["datos"][$i]["Black_BerrysT"] = $row["Black_BerrysA"];
$arr["datos"][$i]["BlueberryT"] = $row["BlueberryA"];
$arr["datos"][$i]["Blueberry_Charola_170_GrT"] = $row["Blueberry_Charola_170_GrA"];
$arr["datos"][$i]["Bolsa_Nuggets_Pollo_Tyson_900GT"] = $row["Bolsa_Nuggets_Pollo_Tyson_900GA"];
$arr["datos"][$i]["Bote_AceitunasT"] = $row["Bote_AceitunasA"];
$arr["datos"][$i]["Bote_CerezaT"] = $row["Bote_CerezaA"];
$arr["datos"][$i]["BrocoliT"] = $row["BrocoliA"];
$arr["datos"][$i]["Brocoli_Sin_TalloT"] = $row["Brocoli_Sin_TalloA"];
$arr["datos"][$i]["Cacahuate_Limpio_TostadoT"] = $row["Cacahuate_Limpio_TostadoA"];
$arr["datos"][$i]["Calabacita_ItalianaT"] = $row["Calabacita_ItalianaA"];
$arr["datos"][$i]["Calabaza_De_CastillaT"] = $row["Calabaza_De_CastillaA"];
$arr["datos"][$i]["Caldo_De_PolloT"] = $row["Caldo_De_PolloA"];
$arr["datos"][$i]["Camaron_MolidoT"] = $row["Camaron_MolidoA"];
$arr["datos"][$i]["Camaron_SecoT"] = $row["Camaron_SecoA"];
$arr["datos"][$i]["Camote_NaranjaT"] = $row["Camote_NaranjaA"];
$arr["datos"][$i]["Camote_RojoT"] = $row["Camote_RojoA"];
$arr["datos"][$i]["Canela_EnteraT"] = $row["Canela_EnteraA"];
$arr["datos"][$i]["Carambola_VerdeT"] = $row["Carambola_VerdeA"];
$arr["datos"][$i]["CarbonT"] = $row["CarbonA"];
$arr["datos"][$i]["Cebolla_BlancaT"] = $row["Cebolla_BlancaA"];
$arr["datos"][$i]["Cebolla_Blanca_LimpiaT"] = $row["Cebolla_Blanca_LimpiaA"];
$arr["datos"][$i]["Cebolla_Blanca_SegundaT"] = $row["Cebolla_Blanca_SegundaA"];
$arr["datos"][$i]["Cebolla_CambrayT"] = $row["Cebolla_CambrayA"];
$arr["datos"][$i]["Cebolla_MoradaT"] = $row["Cebolla_MoradaA"];
$arr["datos"][$i]["Cebolla_PoroT"] = $row["Cebolla_PoroA"];
$arr["datos"][$i]["Cebollin_ChinoT"] = $row["Cebollin_ChinoA"];
$arr["datos"][$i]["ChalotT"] = $row["ChalotA"];
$arr["datos"][$i]["ChampinonT"] = $row["ChampinonA"];
$arr["datos"][$i]["Champinon_MedianoT"] = $row["Champinon_MedianoA"];
$arr["datos"][$i]["Champinon_PortobellT"] = $row["Champinon_PortobellA"];
$arr["datos"][$i]["Champinon_Portobell_500_GrT"] = $row["Champinon_Portobell_500_GrA"];
$arr["datos"][$i]["Champinon_PortobelloT"] = $row["Champinon_PortobelloA"];
$arr["datos"][$i]["Chayote_Sin_EspinasT"] = $row["Chayote_Sin_EspinasA"];
$arr["datos"][$i]["Chile_AnaheimT"] = $row["Chile_AnaheimA"];
$arr["datos"][$i]["Chile_AnchoT"] = $row["Chile_AnchoA"];
$arr["datos"][$i]["Chile_CaribeT"] = $row["Chile_CaribeA"];
$arr["datos"][$i]["Chile_CascabelT"] = $row["Chile_CascabelA"];
$arr["datos"][$i]["Chile_ChilakaT"] = $row["Chile_ChilakaA"];
$arr["datos"][$i]["Chile_Chipotle_SecoT"] = $row["Chile_Chipotle_SecoA"];
$arr["datos"][$i]["Chile_De_Arbol_SecoT"] = $row["Chile_De_Arbol_SecoA"];
$arr["datos"][$i]["Chile_En_Polvo_Sal_Y_LimonT"] = $row["Chile_En_Polvo_Sal_Y_LimonA"];
$arr["datos"][$i]["Chile_GuajilloT"] = $row["Chile_GuajilloA"];
$arr["datos"][$i]["Chile_GueroT"] = $row["Chile_GueroA"];
$arr["datos"][$i]["Chile_Habanero_NaranjaT"] = $row["Chile_Habanero_NaranjaA"];
$arr["datos"][$i]["Chile_Habanero_VerdeT"] = $row["Chile_Habanero_VerdeA"];
$arr["datos"][$i]["Chile_HuajilloT"] = $row["Chile_HuajilloA"];
$arr["datos"][$i]["Chile_Jalapeno_RojoT"] = $row["Chile_Jalapeno_RojoA"];
$arr["datos"][$i]["Chile_Jalapeno_VerdeT"] = $row["Chile_Jalapeno_VerdeA"];
$arr["datos"][$i]["Chile_ManzanoT"] = $row["Chile_ManzanoA"];
$arr["datos"][$i]["Chile_MoritaT"] = $row["Chile_MoritaA"];
$arr["datos"][$i]["Chile_Morron_AmarilloT"] = $row["Chile_Morron_AmarilloA"];
$arr["datos"][$i]["Chile_Morron_RojoT"] = $row["Chile_Morron_RojoA"];
$arr["datos"][$i]["Chile_Morron_VerdeT"] = $row["Chile_Morron_VerdeA"];
$arr["datos"][$i]["Chile_PasillaT"] = $row["Chile_PasillaA"];
$arr["datos"][$i]["Chile_PiquinT"] = $row["Chile_PiquinA"];
$arr["datos"][$i]["Chile_PoblanoT"] = $row["Chile_PoblanoA"];
$arr["datos"][$i]["Chile_SerranoT"] = $row["Chile_SerranoA"];
$arr["datos"][$i]["Chile_Serrano_VerdeT"] = $row["Chile_Serrano_VerdeA"];
$arr["datos"][$i]["Chle_HabaneroT"] = $row["Chle_HabaneroA"];
$arr["datos"][$i]["Chocolate_AbuelitaT"] = $row["Chocolate_AbuelitaA"];
$arr["datos"][$i]["CilantroT"] = $row["CilantroA"];
$arr["datos"][$i]["CiruelaT"] = $row["CiruelaA"];
$arr["datos"][$i]["Coco_RayadoT"] = $row["Coco_RayadoA"];
$arr["datos"][$i]["Col_MoradaT"] = $row["Col_MoradaA"];
$arr["datos"][$i]["Colador_De_Ac_Inox_De_15_CmT"] = $row["Colador_De_Ac_Inox_De_15_CmA"];
$arr["datos"][$i]["ColiflorT"] = $row["ColiflorA"];
$arr["datos"][$i]["Comino_MolidoT"] = $row["Comino_MolidoA"];
$arr["datos"][$i]["Concentrado_De_JamaicaT"] = $row["Concentrado_De_JamaicaA"];
$arr["datos"][$i]["DuraznoT"] = $row["DuraznoA"];
$arr["datos"][$i]["Ejote_VerdeT"] = $row["Ejote_VerdeA"];
$arr["datos"][$i]["Ejotes_VerdesT"] = $row["Ejotes_VerdesA"];
$arr["datos"][$i]["Elote_Amarillo_EnteroT"] = $row["Elote_Amarillo_EnteroA"];
$arr["datos"][$i]["Elote_En_Grano_Amarillo_CongeladoT"] = $row["Elote_En_Grano_Amarillo_CongeladoA"];
$arr["datos"][$i]["Elote_EnteroT"] = $row["Elote_EnteroA"];
$arr["datos"][$i]["EneldoT"] = $row["EneldoA"];
$arr["datos"][$i]["Ensalada_De_Espinacas_384_GrT"] = $row["Ensalada_De_Espinacas_384_GrA"];
$arr["datos"][$i]["EpazoteT"] = $row["EpazoteA"];
$arr["datos"][$i]["Esparragos_VerdesT"] = $row["Esparragos_VerdesA"];
$arr["datos"][$i]["EspinacasT"] = $row["EspinacasA"];
$arr["datos"][$i]["Espinacas_PopeyeT"] = $row["Espinacas_PopeyeA"];
$arr["datos"][$i]["EucaliptoT"] = $row["EucaliptoA"];
$arr["datos"][$i]["Eva_ItalianaT"] = $row["Eva_ItalianaA"];
$arr["datos"][$i]["Exprimidor_Manual_De_Limas_AmarillasT"] = $row["Exprimidor_Manual_De_Limas_AmarillasA"];
$arr["datos"][$i]["Flor_ComestibleT"] = $row["Flor_ComestibleA"];
$arr["datos"][$i]["Flor_De_CalabazaT"] = $row["Flor_De_CalabazaA"];
$arr["datos"][$i]["Flor_De_JamaicaT"] = $row["Flor_De_JamaicaA"];
$arr["datos"][$i]["FrambuesasT"] = $row["FrambuesasA"];
$arr["datos"][$i]["Frambuesas_CharolaT"] = $row["Frambuesas_CharolaA"];
$arr["datos"][$i]["FresasT"] = $row["FresasA"];
$arr["datos"][$i]["Frijol_PintoT"] = $row["Frijol_PintoA"];
$arr["datos"][$i]["Frijoles_BallosT"] = $row["Frijoles_BallosA"];
$arr["datos"][$i]["GarbanzoT"] = $row["GarbanzoA"];
$arr["datos"][$i]["Garrafones_10_LitrosT"] = $row["Garrafones_10_LitrosA"];
$arr["datos"][$i]["GengibreT"] = $row["GengibreA"];
$arr["datos"][$i]["Gengibre_EnteroT"] = $row["Gengibre_EnteroA"];
$arr["datos"][$i]["Germen_De_AlfalfaT"] = $row["Germen_De_AlfalfaA"];
$arr["datos"][$i]["Germen_De_SoyaT"] = $row["Germen_De_SoyaA"];
$arr["datos"][$i]["Germinado_De_AlfalfaT"] = $row["Germinado_De_AlfalfaA"];
$arr["datos"][$i]["GranadaT"] = $row["GranadaA"];
$arr["datos"][$i]["GuayabaT"] = $row["GuayabaA"];
$arr["datos"][$i]["Hiervabuena_FrescaT"] = $row["Hiervabuena_FrescaA"];
$arr["datos"][$i]["HigosT"] = $row["HigosA"];
$arr["datos"][$i]["HinojoT"] = $row["HinojoA"];
$arr["datos"][$i]["Hoja_De_PlatanoT"] = $row["Hoja_De_PlatanoA"];
$arr["datos"][$i]["Hongo_CreminiT"] = $row["Hongo_CreminiA"];
$arr["datos"][$i]["Hongo_Cremini_250_GrT"] = $row["Hongo_Cremini_250_GrA"];
$arr["datos"][$i]["Hongo_Cremini_BabyT"] = $row["Hongo_Cremini_BabyA"];
$arr["datos"][$i]["Hongo_SetasT"] = $row["Hongo_SetasA"];
$arr["datos"][$i]["Huevo_BlancoT"] = $row["Huevo_BlancoA"];
$arr["datos"][$i]["Huevo_De_CorodnizT"] = $row["Huevo_De_CorodnizA"];
$arr["datos"][$i]["HuitlacocheT"] = $row["HuitlacocheA"];
$arr["datos"][$i]["JicamaT"] = $row["JicamaA"];
$arr["datos"][$i]["Jugo_ArandanoT"] = $row["Jugo_ArandanoA"];
$arr["datos"][$i]["Jugo_De_LimonT"] = $row["Jugo_De_LimonA"];
$arr["datos"][$i]["Jugo_De_NaranjaT"] = $row["Jugo_De_NaranjaA"];
$arr["datos"][$i]["Kale_BolsaT"] = $row["Kale_BolsaA"];
$arr["datos"][$i]["Kiwi_ChilenoT"] = $row["Kiwi_ChilenoA"];
$arr["datos"][$i]["Knor_SuizoT"] = $row["Knor_SuizoA"];
$arr["datos"][$i]["Knor_TomateT"] = $row["Knor_TomateA"];
$arr["datos"][$i]["LaurelT"] = $row["LaurelA"];
$arr["datos"][$i]["Lechuga_Baby_ArugulaT"] = $row["Lechuga_Baby_ArugulaA"];
$arr["datos"][$i]["Lechuga_Boston_GrandeT"] = $row["Lechuga_Boston_GrandeA"];
$arr["datos"][$i]["Lechuga_ItalianaT"] = $row["Lechuga_ItalianaA"];
$arr["datos"][$i]["Lechuga_NapaT"] = $row["Lechuga_NapaA"];
$arr["datos"][$i]["Lechuga_OrejonaT"] = $row["Lechuga_OrejonaA"];
$arr["datos"][$i]["Lechuga_Punta_RojaT"] = $row["Lechuga_Punta_RojaA"];
$arr["datos"][$i]["Lechuga_RomanaT"] = $row["Lechuga_RomanaA"];
$arr["datos"][$i]["Lentejas_A_GranelT"] = $row["Lentejas_A_GranelA"];
$arr["datos"][$i]["Limon_AmarilloT"] = $row["Limon_AmarilloA"];
$arr["datos"][$i]["Limon_VerdeT"] = $row["Limon_VerdeA"];
$arr["datos"][$i]["Limon_Verde_Sin_SemillaT"] = $row["Limon_Verde_Sin_SemillaA"];
$arr["datos"][$i]["Maiz_PozoleroT"] = $row["Maiz_PozoleroA"];
$arr["datos"][$i]["MandarinaT"] = $row["MandarinaA"];
$arr["datos"][$i]["Mango_AtaulfoT"] = $row["Mango_AtaulfoA"];
$arr["datos"][$i]["Manzana_Golden_AmarillaT"] = $row["Manzana_Golden_AmarillaA"];
$arr["datos"][$i]["Manzana_Granny_SmitT"] = $row["Manzana_Granny_SmitA"];
$arr["datos"][$i]["Manzana_Red_DeliciosT"] = $row["Manzana_Red_DeliciosA"];
$arr["datos"][$i]["MaracuyaT"] = $row["MaracuyaA"];
$arr["datos"][$i]["Masa_De_TortillaT"] = $row["Masa_De_TortillaA"];
$arr["datos"][$i]["MasecaT"] = $row["MasecaA"];
$arr["datos"][$i]["MelonT"] = $row["MelonA"];
$arr["datos"][$i]["MentaT"] = $row["MentaA"];
$arr["datos"][$i]["Microdin_Desinfectante_1LT"] = $row["Microdin_Desinfectante_1LA"];
$arr["datos"][$i]["MoleT"] = $row["MoleA"];
$arr["datos"][$i]["NaboT"] = $row["NaboA"];
$arr["datos"][$i]["Naranja_ValenciaT"] = $row["Naranja_ValenciaA"];
$arr["datos"][$i]["Nopal_EnteroT"] = $row["Nopal_EnteroA"];
$arr["datos"][$i]["Nopalito_PicadoT"] = $row["Nopalito_PicadoA"];
$arr["datos"][$i]["Nuez_CorazonT"] = $row["Nuez_CorazonA"];
$arr["datos"][$i]["Nuez_MoscadaT"] = $row["Nuez_MoscadaA"];
$arr["datos"][$i]["Oregano_CoahuilaT"] = $row["Oregano_CoahuilaA"];
$arr["datos"][$i]["Pan_De_Hamburguesa_BolsaT"] = $row["Pan_De_Hamburguesa_BolsaA"];
$arr["datos"][$i]["Pan_HamburguesaT"] = $row["Pan_HamburguesaA"];
$arr["datos"][$i]["Pan_Hot_DogT"] = $row["Pan_Hot_DogA"];
$arr["datos"][$i]["Pan_TeleraT"] = $row["Pan_TeleraA"];
$arr["datos"][$i]["Papa_BlancaT"] = $row["Papa_BlancaA"];
$arr["datos"][$i]["Papa_GaleanaT"] = $row["Papa_GaleanaA"];
$arr["datos"][$i]["Papa_SegundaT"] = $row["Papa_SegundaA"];
$arr["datos"][$i]["Papa_TerceraT"] = $row["Papa_TerceraA"];
$arr["datos"][$i]["Papas_A_La_FrancesaT"] = $row["Papas_A_La_FrancesaA"];
$arr["datos"][$i]["Papaya_MaradolT"] = $row["Papaya_MaradolA"];
$arr["datos"][$i]["Pepino_BabyT"] = $row["Pepino_BabyA"];
$arr["datos"][$i]["Pepino_GrandeT"] = $row["Pepino_GrandeA"];
$arr["datos"][$i]["Pera_De_AnjouT"] = $row["Pera_De_AnjouA"];
$arr["datos"][$i]["Perejil_ChinoT"] = $row["Perejil_ChinoA"];
$arr["datos"][$i]["Perejil_LisoT"] = $row["Perejil_LisoA"];
$arr["datos"][$i]["PiloncilloT"] = $row["PiloncilloA"];
$arr["datos"][$i]["Pimienta_Blanca_Frasco_48GT"] = $row["Pimienta_Blanca_Frasco_48GA"];
$arr["datos"][$i]["Pimienta_Entera_NegraT"] = $row["Pimienta_Entera_NegraA"];
$arr["datos"][$i]["Pimienta_Negra_MolidaT"] = $row["Pimienta_Negra_MolidaA"];
$arr["datos"][$i]["PinaT"] = $row["PinaA"];
$arr["datos"][$i]["Pina_MielT"] = $row["Pina_MielA"];
$arr["datos"][$i]["Platano_ChiapasT"] = $row["Platano_ChiapasA"];
$arr["datos"][$i]["Platano_MachoT"] = $row["Platano_MachoA"];
$arr["datos"][$i]["Platano_TabascoT"] = $row["Platano_TabascoA"];
$arr["datos"][$i]["Pure_De_TomateT"] = $row["Pure_De_TomateA"];
$arr["datos"][$i]["Quelites_100_GrT"] = $row["Quelites_100_GrA"];
$arr["datos"][$i]["RabanoT"] = $row["RabanoA"];
$arr["datos"][$i]["Rabano_LargoT"] = $row["Rabano_LargoA"];
$arr["datos"][$i]["Repollo_BlancoT"] = $row["Repollo_BlancoA"];
$arr["datos"][$i]["Repollo_MoradoT"] = $row["Repollo_MoradoA"];
$arr["datos"][$i]["Romerito_FrescoT"] = $row["Romerito_FrescoA"];
$arr["datos"][$i]["Romero_Macho_FrescoT"] = $row["Romero_Macho_FrescoA"];
$arr["datos"][$i]["Sandia_Roja_RayadaT"] = $row["Sandia_Roja_RayadaA"];
$arr["datos"][$i]["Semilla_De_CacaoT"] = $row["Semilla_De_CacaoA"];
$arr["datos"][$i]["Semilla_De_MostazaT"] = $row["Semilla_De_MostazaA"];
$arr["datos"][$i]["Semilla_De_Mostaza_AmarillaT"] = $row["Semilla_De_Mostaza_AmarillaA"];
$arr["datos"][$i]["Semillas_De_GirasolT"] = $row["Semillas_De_GirasolA"];
$arr["datos"][$i]["Spring_MixT"] = $row["Spring_MixA"];
$arr["datos"][$i]["Spring_Mix_Organica_CharolaT"] = $row["Spring_Mix_Organica_CharolaA"];
$arr["datos"][$i]["Tomate_CherryT"] = $row["Tomate_CherryA"];
$arr["datos"][$i]["Tomate_HuajeT"] = $row["Tomate_HuajeA"];
$arr["datos"][$i]["Tomate_Huaje_SegundaT"] = $row["Tomate_Huaje_SegundaA"];
$arr["datos"][$i]["Tomatillo_VerdeT"] = $row["Tomatillo_VerdeA"];
$arr["datos"][$i]["Tomillo_FrescoT"] = $row["Tomillo_FrescoA"];
$arr["datos"][$i]["ToronjaT"] = $row["ToronjaA"];
$arr["datos"][$i]["Tortillas_De_HarinaT"] = $row["Tortillas_De_HarinaA"];
$arr["datos"][$i]["Tortillas_MaizT"] = $row["Tortillas_MaizA"];
$arr["datos"][$i]["TunaT"] = $row["TunaA"];
$arr["datos"][$i]["Uva_Negra_Sin_SemillaT"] = $row["Uva_Negra_Sin_SemillaA"];
$arr["datos"][$i]["Uva_Roja_Sin_SemillaT"] = $row["Uva_Roja_Sin_SemillaA"];
$arr["datos"][$i]["Uva_Verde_Sin_SemillaT"] = $row["Uva_Verde_Sin_SemillaA"];
$arr["datos"][$i]["Uvas_Moradas_Sin_SemillaT"] = $row["Uvas_Moradas_Sin_SemillaA"];
$arr["datos"][$i]["XoconostleT"] = $row["XoconostleA"];
$arr["datos"][$i]["Yogurt_NaturalT"] = $row["Yogurt_NaturalA"];
$arr["datos"][$i]["Zacate_LimonT"] = $row["Zacate_LimonA"];
$arr["datos"][$i]["ZanahoriaT"] = $row["ZanahoriaA"];
$arr["datos"][$i]["Zanahoria_BabyT"] = $row["Zanahoria_BabyA"];
$arr["datos"][$i]["Zanahoria_LenaT"] = $row["Zanahoria_LenaA"];
$arr["datos"][$i]["ZarzamoraT"] = $row["ZarzamoraA"];
$arr["datos"][$i]["Zarzamora_CharolaT"] = $row["Zarzamora_CharolaA"];

		
		$i++;

	}
	echo json_encode($arr);

?>