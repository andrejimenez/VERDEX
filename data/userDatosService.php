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

	date_default_timezone_set("America/Monterrey");

	@session_start();
	$dateT = date("j F Y");

	$user = $_POST["userEmail"];
	
	$sql = "SELECT * FROM restaurante WHERE email = '$user'";
	$result = $conn->query($sql);
	$i = 0;
	$arr = array();
	while ($row = $result->fetch_assoc()) {
		$arr["datos"][$i]["nombre"] = $row["nombre"];
		$arr["datos"][$i]["AcelgaT"] = $row["AcelgaT"];
$arr["datos"][$i]["Aguacate_Hass_ExtraT"] = $row["Aguacate_Hass_ExtraT"];
$arr["datos"][$i]["Aguacate_Hass_Extra_PremT"] = $row["Aguacate_Hass_Extra_PremT"];
$arr["datos"][$i]["Aguacate_Hass_SuperT"] = $row["Aguacate_Hass_SuperT"];
$arr["datos"][$i]["Aguacate_Hass_Super_PremT"] = $row["Aguacate_Hass_Super_PremT"];
$arr["datos"][$i]["Aguacate_PrimeraT"] = $row["Aguacate_PrimeraT"];
$arr["datos"][$i]["Aguacate_Primera_PremiumT"] = $row["Aguacate_Primera_PremiumT"];
$arr["datos"][$i]["Ajo_MachoT"] = $row["Ajo_MachoT"];
$arr["datos"][$i]["Ajo_NacionalT"] = $row["Ajo_NacionalT"];
$arr["datos"][$i]["AjonjoliT"] = $row["AjonjoliT"];
$arr["datos"][$i]["Ajonjoli_EnmieladoT"] = $row["Ajonjoli_EnmieladoT"];
$arr["datos"][$i]["AlbahacarT"] = $row["AlbahacarT"];
$arr["datos"][$i]["Almendra_EnteraT"] = $row["Almendra_EnteraT"];
$arr["datos"][$i]["Almendra_FileteadaT"] = $row["Almendra_FileteadaT"];
$arr["datos"][$i]["AmarantoT"] = $row["AmarantoT"];
$arr["datos"][$i]["AnguT"] = $row["AnguT"];
$arr["datos"][$i]["Anis_EstrellaT"] = $row["Anis_EstrellaT"];
$arr["datos"][$i]["ApioT"] = $row["ApioT"];
$arr["datos"][$i]["Arandanos_SecosT"] = $row["Arandanos_SecosT"];
$arr["datos"][$i]["ArrozT"] = $row["ArrozT"];
$arr["datos"][$i]["Azucar_EstandarT"] = $row["Azucar_EstandarT"];
$arr["datos"][$i]["Azucar_MorenaT"] = $row["Azucar_MorenaT"];
$arr["datos"][$i]["Berengena_MoradaT"] = $row["Berengena_MoradaT"];
$arr["datos"][$i]["Berengena_RayadaT"] = $row["Berengena_RayadaT"];
$arr["datos"][$i]["BerrosT"] = $row["BerrosT"];
$arr["datos"][$i]["BetabelT"] = $row["BetabelT"];
$arr["datos"][$i]["Black_BerrysT"] = $row["Black_BerrysT"];
$arr["datos"][$i]["BlueberryT"] = $row["BlueberryT"];
$arr["datos"][$i]["Blueberry_Charola_170_GrT"] = $row["Blueberry_Charola_170_GrT"];
$arr["datos"][$i]["Bolsa_Nuggets_Pollo_Tyson_900GT"] = $row["Bolsa_Nuggets_Pollo_Tyson_900GT"];
$arr["datos"][$i]["Bote_AceitunasT"] = $row["Bote_AceitunasT"];
$arr["datos"][$i]["Bote_CerezaT"] = $row["Bote_CerezaT"];
$arr["datos"][$i]["BrocoliT"] = $row["BrocoliT"];
$arr["datos"][$i]["Brocoli_Sin_TalloT"] = $row["Brocoli_Sin_TalloT"];
$arr["datos"][$i]["Cacahuate_Limpio_TostadoT"] = $row["Cacahuate_Limpio_TostadoT"];
$arr["datos"][$i]["Calabacita_ItalianaT"] = $row["Calabacita_ItalianaT"];
$arr["datos"][$i]["Calabaza_De_CastillaT"] = $row["Calabaza_De_CastillaT"];
$arr["datos"][$i]["Caldo_De_PolloT"] = $row["Caldo_De_PolloT"];
$arr["datos"][$i]["Camaron_MolidoT"] = $row["Camaron_MolidoT"];
$arr["datos"][$i]["Camaron_SecoT"] = $row["Camaron_SecoT"];
$arr["datos"][$i]["Camote_NaranjaT"] = $row["Camote_NaranjaT"];
$arr["datos"][$i]["Camote_RojoT"] = $row["Camote_RojoT"];
$arr["datos"][$i]["Canela_EnteraT"] = $row["Canela_EnteraT"];
$arr["datos"][$i]["Carambola_VerdeT"] = $row["Carambola_VerdeT"];
$arr["datos"][$i]["CarbonT"] = $row["CarbonT"];
$arr["datos"][$i]["Cebolla_BlancaT"] = $row["Cebolla_BlancaT"];
$arr["datos"][$i]["Cebolla_Blanca_LimpiaT"] = $row["Cebolla_Blanca_LimpiaT"];
$arr["datos"][$i]["Cebolla_Blanca_SegundaT"] = $row["Cebolla_Blanca_SegundaT"];
$arr["datos"][$i]["Cebolla_CambrayT"] = $row["Cebolla_CambrayT"];
$arr["datos"][$i]["Cebolla_MoradaT"] = $row["Cebolla_MoradaT"];
$arr["datos"][$i]["Cebolla_PoroT"] = $row["Cebolla_PoroT"];
$arr["datos"][$i]["Cebollin_ChinoT"] = $row["Cebollin_ChinoT"];
$arr["datos"][$i]["ChalotT"] = $row["ChalotT"];
$arr["datos"][$i]["ChampinonT"] = $row["ChampinonT"];
$arr["datos"][$i]["Champinon_MedianoT"] = $row["Champinon_MedianoT"];
$arr["datos"][$i]["Champinon_PortobellT"] = $row["Champinon_PortobellT"];
$arr["datos"][$i]["Champinon_Portobell_500_GrT"] = $row["Champinon_Portobell_500_GrT"];
$arr["datos"][$i]["Champinon_PortobelloT"] = $row["Champinon_PortobelloT"];
$arr["datos"][$i]["Chayote_Sin_EspinasT"] = $row["Chayote_Sin_EspinasT"];
$arr["datos"][$i]["Chile_AnaheimT"] = $row["Chile_AnaheimT"];
$arr["datos"][$i]["Chile_AnchoT"] = $row["Chile_AnchoT"];
$arr["datos"][$i]["Chile_CaribeT"] = $row["Chile_CaribeT"];
$arr["datos"][$i]["Chile_CascabelT"] = $row["Chile_CascabelT"];
$arr["datos"][$i]["Chile_ChilakaT"] = $row["Chile_ChilakaT"];
$arr["datos"][$i]["Chile_Chipotle_SecoT"] = $row["Chile_Chipotle_SecoT"];
$arr["datos"][$i]["Chile_De_Arbol_SecoT"] = $row["Chile_De_Arbol_SecoT"];
$arr["datos"][$i]["Chile_En_Polvo_Sal_Y_LimonT"] = $row["Chile_En_Polvo_Sal_Y_LimonT"];
$arr["datos"][$i]["Chile_GuajilloT"] = $row["Chile_GuajilloT"];
$arr["datos"][$i]["Chile_GueroT"] = $row["Chile_GueroT"];
$arr["datos"][$i]["Chile_Habanero_NaranjaT"] = $row["Chile_Habanero_NaranjaT"];
$arr["datos"][$i]["Chile_Habanero_VerdeT"] = $row["Chile_Habanero_VerdeT"];
$arr["datos"][$i]["Chile_HuajilloT"] = $row["Chile_HuajilloT"];
$arr["datos"][$i]["Chile_Jalapeno_RojoT"] = $row["Chile_Jalapeno_RojoT"];
$arr["datos"][$i]["Chile_Jalapeno_VerdeT"] = $row["Chile_Jalapeno_VerdeT"];
$arr["datos"][$i]["Chile_ManzanoT"] = $row["Chile_ManzanoT"];
$arr["datos"][$i]["Chile_MoritaT"] = $row["Chile_MoritaT"];
$arr["datos"][$i]["Chile_Morron_AmarilloT"] = $row["Chile_Morron_AmarilloT"];
$arr["datos"][$i]["Chile_Morron_RojoT"] = $row["Chile_Morron_RojoT"];
$arr["datos"][$i]["Chile_Morron_VerdeT"] = $row["Chile_Morron_VerdeT"];
$arr["datos"][$i]["Chile_PasillaT"] = $row["Chile_PasillaT"];
$arr["datos"][$i]["Chile_PiquinT"] = $row["Chile_PiquinT"];
$arr["datos"][$i]["Chile_PoblanoT"] = $row["Chile_PoblanoT"];
$arr["datos"][$i]["Chile_SerranoT"] = $row["Chile_SerranoT"];
$arr["datos"][$i]["Chile_Serrano_VerdeT"] = $row["Chile_Serrano_VerdeT"];
$arr["datos"][$i]["Chle_HabaneroT"] = $row["Chle_HabaneroT"];
$arr["datos"][$i]["Chocolate_AbuelitaT"] = $row["Chocolate_AbuelitaT"];
$arr["datos"][$i]["CilantroT"] = $row["CilantroT"];
$arr["datos"][$i]["CiruelaT"] = $row["CiruelaT"];
$arr["datos"][$i]["Coco_RayadoT"] = $row["Coco_RayadoT"];
$arr["datos"][$i]["Col_MoradaT"] = $row["Col_MoradaT"];
$arr["datos"][$i]["Colador_De_Ac_Inox_De_15_CmT"] = $row["Colador_De_Ac_Inox_De_15_CmT"];
$arr["datos"][$i]["ColiflorT"] = $row["ColiflorT"];
$arr["datos"][$i]["Comino_MolidoT"] = $row["Comino_MolidoT"];
$arr["datos"][$i]["Concentrado_De_JamaicaT"] = $row["Concentrado_De_JamaicaT"];
$arr["datos"][$i]["DuraznoT"] = $row["DuraznoT"];
$arr["datos"][$i]["Ejote_VerdeT"] = $row["Ejote_VerdeT"];
$arr["datos"][$i]["Ejotes_VerdesT"] = $row["Ejotes_VerdesT"];
$arr["datos"][$i]["Elote_Amarillo_EnteroT"] = $row["Elote_Amarillo_EnteroT"];
$arr["datos"][$i]["Elote_En_Grano_Amarillo_CongeladoT"] = $row["Elote_En_Grano_Amarillo_CongeladoT"];
$arr["datos"][$i]["Elote_EnteroT"] = $row["Elote_EnteroT"];
$arr["datos"][$i]["EneldoT"] = $row["EneldoT"];
$arr["datos"][$i]["Ensalada_De_Espinacas_384_GrT"] = $row["Ensalada_De_Espinacas_384_GrT"];
$arr["datos"][$i]["EpazoteT"] = $row["EpazoteT"];
$arr["datos"][$i]["Esparragos_VerdesT"] = $row["Esparragos_VerdesT"];
$arr["datos"][$i]["EspinacasT"] = $row["EspinacasT"];
$arr["datos"][$i]["Espinacas_PopeyeT"] = $row["Espinacas_PopeyeT"];
$arr["datos"][$i]["EucaliptoT"] = $row["EucaliptoT"];
$arr["datos"][$i]["Eva_ItalianaT"] = $row["Eva_ItalianaT"];
$arr["datos"][$i]["Exprimidor_Manual_De_Limas_AmarillasT"] = $row["Exprimidor_Manual_De_Limas_AmarillasT"];
$arr["datos"][$i]["Flor_ComestibleT"] = $row["Flor_ComestibleT"];
$arr["datos"][$i]["Flor_De_CalabazaT"] = $row["Flor_De_CalabazaT"];
$arr["datos"][$i]["Flor_De_JamaicaT"] = $row["Flor_De_JamaicaT"];
$arr["datos"][$i]["FrambuesasT"] = $row["FrambuesasT"];
$arr["datos"][$i]["Frambuesas_CharolaT"] = $row["Frambuesas_CharolaT"];
$arr["datos"][$i]["FresasT"] = $row["FresasT"];
$arr["datos"][$i]["Frijol_PintoT"] = $row["Frijol_PintoT"];
$arr["datos"][$i]["Frijoles_BallosT"] = $row["Frijoles_BallosT"];
$arr["datos"][$i]["GarbanzoT"] = $row["GarbanzoT"];
$arr["datos"][$i]["Garrafones_10_LitrosT"] = $row["Garrafones_10_LitrosT"];
$arr["datos"][$i]["GengibreT"] = $row["GengibreT"];
$arr["datos"][$i]["Gengibre_EnteroT"] = $row["Gengibre_EnteroT"];
$arr["datos"][$i]["Germen_De_AlfalfaT"] = $row["Germen_De_AlfalfaT"];
$arr["datos"][$i]["Germen_De_SoyaT"] = $row["Germen_De_SoyaT"];
$arr["datos"][$i]["Germinado_De_AlfalfaT"] = $row["Germinado_De_AlfalfaT"];
$arr["datos"][$i]["GranadaT"] = $row["GranadaT"];
$arr["datos"][$i]["GuayabaT"] = $row["GuayabaT"];
$arr["datos"][$i]["Hiervabuena_FrescaT"] = $row["Hiervabuena_FrescaT"];
$arr["datos"][$i]["HigosT"] = $row["HigosT"];
$arr["datos"][$i]["HinojoT"] = $row["HinojoT"];
$arr["datos"][$i]["Hoja_De_PlatanoT"] = $row["Hoja_De_PlatanoT"];
$arr["datos"][$i]["Hongo_CreminiT"] = $row["Hongo_CreminiT"];
$arr["datos"][$i]["Hongo_Cremini_250_GrT"] = $row["Hongo_Cremini_250_GrT"];
$arr["datos"][$i]["Hongo_Cremini_BabyT"] = $row["Hongo_Cremini_BabyT"];
$arr["datos"][$i]["Hongo_SetasT"] = $row["Hongo_SetasT"];
$arr["datos"][$i]["Huevo_BlancoT"] = $row["Huevo_BlancoT"];
$arr["datos"][$i]["Huevo_De_CorodnizT"] = $row["Huevo_De_CorodnizT"];
$arr["datos"][$i]["HuitlacocheT"] = $row["HuitlacocheT"];
$arr["datos"][$i]["JicamaT"] = $row["JicamaT"];
$arr["datos"][$i]["Jugo_ArandanoT"] = $row["Jugo_ArandanoT"];
$arr["datos"][$i]["Jugo_De_LimonT"] = $row["Jugo_De_LimonT"];
$arr["datos"][$i]["Jugo_De_NaranjaT"] = $row["Jugo_De_NaranjaT"];
$arr["datos"][$i]["Kale_BolsaT"] = $row["Kale_BolsaT"];
$arr["datos"][$i]["Kiwi_ChilenoT"] = $row["Kiwi_ChilenoT"];
$arr["datos"][$i]["Knor_SuizoT"] = $row["Knor_SuizoT"];
$arr["datos"][$i]["Knor_TomateT"] = $row["Knor_TomateT"];
$arr["datos"][$i]["LaurelT"] = $row["LaurelT"];
$arr["datos"][$i]["Lechuga_Baby_ArugulaT"] = $row["Lechuga_Baby_ArugulaT"];
$arr["datos"][$i]["Lechuga_Boston_GrandeT"] = $row["Lechuga_Boston_GrandeT"];
$arr["datos"][$i]["Lechuga_ItalianaT"] = $row["Lechuga_ItalianaT"];
$arr["datos"][$i]["Lechuga_NapaT"] = $row["Lechuga_NapaT"];
$arr["datos"][$i]["Lechuga_OrejonaT"] = $row["Lechuga_OrejonaT"];
$arr["datos"][$i]["Lechuga_Punta_RojaT"] = $row["Lechuga_Punta_RojaT"];
$arr["datos"][$i]["Lechuga_RomanaT"] = $row["Lechuga_RomanaT"];
$arr["datos"][$i]["Lentejas_A_GranelT"] = $row["Lentejas_A_GranelT"];
$arr["datos"][$i]["Limon_AmarilloT"] = $row["Limon_AmarilloT"];
$arr["datos"][$i]["Limon_VerdeT"] = $row["Limon_VerdeT"];
$arr["datos"][$i]["Limon_Verde_Sin_SemillaT"] = $row["Limon_Verde_Sin_SemillaT"];
$arr["datos"][$i]["Maiz_PozoleroT"] = $row["Maiz_PozoleroT"];
$arr["datos"][$i]["MandarinaT"] = $row["MandarinaT"];
$arr["datos"][$i]["Mango_AtaulfoT"] = $row["Mango_AtaulfoT"];
$arr["datos"][$i]["Manzana_Golden_AmarillaT"] = $row["Manzana_Golden_AmarillaT"];
$arr["datos"][$i]["Manzana_Granny_SmitT"] = $row["Manzana_Granny_SmitT"];
$arr["datos"][$i]["Manzana_Red_DeliciosT"] = $row["Manzana_Red_DeliciosT"];
$arr["datos"][$i]["MaracuyaT"] = $row["MaracuyaT"];
$arr["datos"][$i]["Masa_De_TortillaT"] = $row["Masa_De_TortillaT"];
$arr["datos"][$i]["MasecaT"] = $row["MasecaT"];
$arr["datos"][$i]["MelonT"] = $row["MelonT"];
$arr["datos"][$i]["MentaT"] = $row["MentaT"];
$arr["datos"][$i]["Microdin_Desinfectante_1LT"] = $row["Microdin_Desinfectante_1LT"];
$arr["datos"][$i]["MoleT"] = $row["MoleT"];
$arr["datos"][$i]["NaboT"] = $row["NaboT"];
$arr["datos"][$i]["Naranja_ValenciaT"] = $row["Naranja_ValenciaT"];
$arr["datos"][$i]["Nopal_EnteroT"] = $row["Nopal_EnteroT"];
$arr["datos"][$i]["Nopalito_PicadoT"] = $row["Nopalito_PicadoT"];
$arr["datos"][$i]["Nuez_CorazonT"] = $row["Nuez_CorazonT"];
$arr["datos"][$i]["Nuez_MoscadaT"] = $row["Nuez_MoscadaT"];
$arr["datos"][$i]["Oregano_CoahuilaT"] = $row["Oregano_CoahuilaT"];
$arr["datos"][$i]["Pan_De_Hamburguesa_BolsaT"] = $row["Pan_De_Hamburguesa_BolsaT"];
$arr["datos"][$i]["Pan_HamburguesaT"] = $row["Pan_HamburguesaT"];
$arr["datos"][$i]["Pan_Hot_DogT"] = $row["Pan_Hot_DogT"];
$arr["datos"][$i]["Pan_TeleraT"] = $row["Pan_TeleraT"];
$arr["datos"][$i]["Papa_BlancaT"] = $row["Papa_BlancaT"];
$arr["datos"][$i]["Papa_GaleanaT"] = $row["Papa_GaleanaT"];
$arr["datos"][$i]["Papa_SegundaT"] = $row["Papa_SegundaT"];
$arr["datos"][$i]["Papa_TerceraT"] = $row["Papa_TerceraT"];
$arr["datos"][$i]["Papas_A_La_FrancesaT"] = $row["Papas_A_La_FrancesaT"];
$arr["datos"][$i]["Papaya_MaradolT"] = $row["Papaya_MaradolT"];
$arr["datos"][$i]["Pepino_BabyT"] = $row["Pepino_BabyT"];
$arr["datos"][$i]["Pepino_GrandeT"] = $row["Pepino_GrandeT"];
$arr["datos"][$i]["Pera_De_AnjouT"] = $row["Pera_De_AnjouT"];
$arr["datos"][$i]["Perejil_ChinoT"] = $row["Perejil_ChinoT"];
$arr["datos"][$i]["Perejil_LisoT"] = $row["Perejil_LisoT"];
$arr["datos"][$i]["PiloncilloT"] = $row["PiloncilloT"];
$arr["datos"][$i]["Pimienta_Blanca_Frasco_48GT"] = $row["Pimienta_Blanca_Frasco_48GT"];
$arr["datos"][$i]["Pimienta_Entera_NegraT"] = $row["Pimienta_Entera_NegraT"];
$arr["datos"][$i]["Pimienta_Negra_MolidaT"] = $row["Pimienta_Negra_MolidaT"];
$arr["datos"][$i]["PinaT"] = $row["PinaT"];
$arr["datos"][$i]["Pina_MielT"] = $row["Pina_MielT"];
$arr["datos"][$i]["Platano_ChiapasT"] = $row["Platano_ChiapasT"];
$arr["datos"][$i]["Platano_MachoT"] = $row["Platano_MachoT"];
$arr["datos"][$i]["Platano_TabascoT"] = $row["Platano_TabascoT"];
$arr["datos"][$i]["Pure_De_TomateT"] = $row["Pure_De_TomateT"];
$arr["datos"][$i]["Quelites_100_GrT"] = $row["Quelites_100_GrT"];
$arr["datos"][$i]["RabanoT"] = $row["RabanoT"];
$arr["datos"][$i]["Rabano_LargoT"] = $row["Rabano_LargoT"];
$arr["datos"][$i]["Repollo_BlancoT"] = $row["Repollo_BlancoT"];
$arr["datos"][$i]["Repollo_MoradoT"] = $row["Repollo_MoradoT"];
$arr["datos"][$i]["Romerito_FrescoT"] = $row["Romerito_FrescoT"];
$arr["datos"][$i]["Romero_Macho_FrescoT"] = $row["Romero_Macho_FrescoT"];
$arr["datos"][$i]["Sandia_Roja_RayadaT"] = $row["Sandia_Roja_RayadaT"];
$arr["datos"][$i]["Semilla_De_CacaoT"] = $row["Semilla_De_CacaoT"];
$arr["datos"][$i]["Semilla_De_MostazaT"] = $row["Semilla_De_MostazaT"];
$arr["datos"][$i]["Semilla_De_Mostaza_AmarillaT"] = $row["Semilla_De_Mostaza_AmarillaT"];
$arr["datos"][$i]["Semillas_De_GirasolT"] = $row["Semillas_De_GirasolT"];
$arr["datos"][$i]["Spring_MixT"] = $row["Spring_MixT"];
$arr["datos"][$i]["Spring_Mix_Organica_CharolaT"] = $row["Spring_Mix_Organica_CharolaT"];
$arr["datos"][$i]["Tomate_CherryT"] = $row["Tomate_CherryT"];
$arr["datos"][$i]["Tomate_HuajeT"] = $row["Tomate_HuajeT"];
$arr["datos"][$i]["Tomate_Huaje_SegundaT"] = $row["Tomate_Huaje_SegundaT"];
$arr["datos"][$i]["Tomatillo_VerdeT"] = $row["Tomatillo_VerdeT"];
$arr["datos"][$i]["Tomillo_FrescoT"] = $row["Tomillo_FrescoT"];
$arr["datos"][$i]["ToronjaT"] = $row["ToronjaT"];
$arr["datos"][$i]["Tortillas_De_HarinaT"] = $row["Tortillas_De_HarinaT"];
$arr["datos"][$i]["Tortillas_MaizT"] = $row["Tortillas_MaizT"];
$arr["datos"][$i]["TunaT"] = $row["TunaT"];
$arr["datos"][$i]["Uva_Negra_Sin_SemillaT"] = $row["Uva_Negra_Sin_SemillaT"];
$arr["datos"][$i]["Uva_Roja_Sin_SemillaT"] = $row["Uva_Roja_Sin_SemillaT"];
$arr["datos"][$i]["Uva_Verde_Sin_SemillaT"] = $row["Uva_Verde_Sin_SemillaT"];
$arr["datos"][$i]["Uvas_Moradas_Sin_SemillaT"] = $row["Uvas_Moradas_Sin_SemillaT"];
$arr["datos"][$i]["XoconostleT"] = $row["XoconostleT"];
$arr["datos"][$i]["Yogurt_NaturalT"] = $row["Yogurt_NaturalT"];
$arr["datos"][$i]["Zacate_LimonT"] = $row["Zacate_LimonT"];
$arr["datos"][$i]["ZanahoriaT"] = $row["ZanahoriaT"];
$arr["datos"][$i]["Zanahoria_BabyT"] = $row["Zanahoria_BabyT"];
$arr["datos"][$i]["Zanahoria_LenaT"] = $row["Zanahoria_LenaT"];
$arr["datos"][$i]["ZarzamoraT"] = $row["ZarzamoraT"];
$arr["datos"][$i]["Zarzamora_CharolaT"] = $row["Zarzamora_CharolaT"];


		$arr["datos"][$i]["dateT"] = $dateT;
		$i++;

	}


	echo json_encode($arr);

?>