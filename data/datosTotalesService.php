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
	
	$sql = "SELECT * FROM comida WHERE emailRestaurante = '$user' ORDER BY id DESC";
	$result = $conn->query($sql);
	$i = 0;
	$arr = array();
	while ($row = $result->fetch_assoc()) {
		$arr["datos"][$i]["nombre"] = $row["nombreRestaurante"];
		$arr["datos"][$i]["fecha"] = $row["dateT"];
		$arr["datos"][$i]["AcelgaT"] = $row["Acelga"];
$arr["datos"][$i]["Aguacate_Hass_ExtraT"] = $row["Aguacate_Hass_Extra"];
$arr["datos"][$i]["Aguacate_Hass_Extra_PremT"] = $row["Aguacate_Hass_Extra_Prem"];
$arr["datos"][$i]["Aguacate_Hass_SuperT"] = $row["Aguacate_Hass_Super"];
$arr["datos"][$i]["Aguacate_Hass_Super_PremT"] = $row["Aguacate_Hass_Super_Prem"];
$arr["datos"][$i]["Aguacate_PrimeraT"] = $row["Aguacate_Primera"];
$arr["datos"][$i]["Aguacate_Primera_PremiumT"] = $row["Aguacate_Primera_Premium"];
$arr["datos"][$i]["Ajo_MachoT"] = $row["Ajo_Macho"];
$arr["datos"][$i]["Ajo_NacionalT"] = $row["Ajo_Nacional"];
$arr["datos"][$i]["AjonjoliT"] = $row["Ajonjoli"];
$arr["datos"][$i]["Ajonjoli_EnmieladoT"] = $row["Ajonjoli_Enmielado"];
$arr["datos"][$i]["AlbahacarT"] = $row["Albahacar"];
$arr["datos"][$i]["Almendra_EnteraT"] = $row["Almendra_Entera"];
$arr["datos"][$i]["Almendra_FileteadaT"] = $row["Almendra_Fileteada"];
$arr["datos"][$i]["AmarantoT"] = $row["Amaranto"];
$arr["datos"][$i]["AnguT"] = $row["Angu"];
$arr["datos"][$i]["Anis_EstrellaT"] = $row["Anis_Estrella"];
$arr["datos"][$i]["ApioT"] = $row["Apio"];
$arr["datos"][$i]["Arandanos_SecosT"] = $row["Arandanos_Secos"];
$arr["datos"][$i]["ArrozT"] = $row["Arroz"];
$arr["datos"][$i]["Azucar_EstandarT"] = $row["Azucar_Estandar"];
$arr["datos"][$i]["Azucar_MorenaT"] = $row["Azucar_Morena"];
$arr["datos"][$i]["Berengena_MoradaT"] = $row["Berengena_Morada"];
$arr["datos"][$i]["Berengena_RayadaT"] = $row["Berengena_Rayada"];
$arr["datos"][$i]["BerrosT"] = $row["Berros"];
$arr["datos"][$i]["BetabelT"] = $row["Betabel"];
$arr["datos"][$i]["Black_BerrysT"] = $row["Black_Berrys"];
$arr["datos"][$i]["BlueberryT"] = $row["Blueberry"];
$arr["datos"][$i]["Blueberry_Charola_170_GrT"] = $row["Blueberry_Charola_170_Gr"];
$arr["datos"][$i]["Bolsa_Nuggets_Pollo_Tyson_900GT"] = $row["Bolsa_Nuggets_Pollo_Tyson_900G"];
$arr["datos"][$i]["Bote_AceitunasT"] = $row["Bote_Aceitunas"];
$arr["datos"][$i]["Bote_CerezaT"] = $row["Bote_Cereza"];
$arr["datos"][$i]["BrocoliT"] = $row["Brocoli"];
$arr["datos"][$i]["Brocoli_Sin_TalloT"] = $row["Brocoli_Sin_Tallo"];
$arr["datos"][$i]["Cacahuate_Limpio_TostadoT"] = $row["Cacahuate_Limpio_Tostado"];
$arr["datos"][$i]["Calabacita_ItalianaT"] = $row["Calabacita_Italiana"];
$arr["datos"][$i]["Calabaza_De_CastillaT"] = $row["Calabaza_De_Castilla"];
$arr["datos"][$i]["Caldo_De_PolloT"] = $row["Caldo_De_Pollo"];
$arr["datos"][$i]["Camaron_MolidoT"] = $row["Camaron_Molido"];
$arr["datos"][$i]["Camaron_SecoT"] = $row["Camaron_Seco"];
$arr["datos"][$i]["Camote_NaranjaT"] = $row["Camote_Naranja"];
$arr["datos"][$i]["Camote_RojoT"] = $row["Camote_Rojo"];
$arr["datos"][$i]["Canela_EnteraT"] = $row["Canela_Entera"];
$arr["datos"][$i]["Carambola_VerdeT"] = $row["Carambola_Verde"];
$arr["datos"][$i]["CarbonT"] = $row["Carbon"];
$arr["datos"][$i]["Cebolla_BlancaT"] = $row["Cebolla_Blanca"];
$arr["datos"][$i]["Cebolla_Blanca_LimpiaT"] = $row["Cebolla_Blanca_Limpia"];
$arr["datos"][$i]["Cebolla_Blanca_SegundaT"] = $row["Cebolla_Blanca_Segunda"];
$arr["datos"][$i]["Cebolla_CambrayT"] = $row["Cebolla_Cambray"];
$arr["datos"][$i]["Cebolla_MoradaT"] = $row["Cebolla_Morada"];
$arr["datos"][$i]["Cebolla_PoroT"] = $row["Cebolla_Poro"];
$arr["datos"][$i]["Cebollin_ChinoT"] = $row["Cebollin_Chino"];
$arr["datos"][$i]["ChalotT"] = $row["Chalot"];
$arr["datos"][$i]["ChampinonT"] = $row["Champinon"];
$arr["datos"][$i]["Champinon_MedianoT"] = $row["Champinon_Mediano"];
$arr["datos"][$i]["Champinon_PortobellT"] = $row["Champinon_Portobell"];
$arr["datos"][$i]["Champinon_Portobell_500_GrT"] = $row["Champinon_Portobell_500_Gr"];
$arr["datos"][$i]["Champinon_PortobelloT"] = $row["Champinon_Portobello"];
$arr["datos"][$i]["Chayote_Sin_EspinasT"] = $row["Chayote_Sin_Espinas"];
$arr["datos"][$i]["Chile_AnaheimT"] = $row["Chile_Anaheim"];
$arr["datos"][$i]["Chile_AnchoT"] = $row["Chile_Ancho"];
$arr["datos"][$i]["Chile_CaribeT"] = $row["Chile_Caribe"];
$arr["datos"][$i]["Chile_CascabelT"] = $row["Chile_Cascabel"];
$arr["datos"][$i]["Chile_ChilakaT"] = $row["Chile_Chilaka"];
$arr["datos"][$i]["Chile_Chipotle_SecoT"] = $row["Chile_Chipotle_Seco"];
$arr["datos"][$i]["Chile_De_Arbol_SecoT"] = $row["Chile_De_Arbol_Seco"];
$arr["datos"][$i]["Chile_En_Polvo_Sal_Y_LimonT"] = $row["Chile_En_Polvo_Sal_Y_Limon"];
$arr["datos"][$i]["Chile_GuajilloT"] = $row["Chile_Guajillo"];
$arr["datos"][$i]["Chile_GueroT"] = $row["Chile_Guero"];
$arr["datos"][$i]["Chile_Habanero_NaranjaT"] = $row["Chile_Habanero_Naranja"];
$arr["datos"][$i]["Chile_Habanero_VerdeT"] = $row["Chile_Habanero_Verde"];
$arr["datos"][$i]["Chile_HuajilloT"] = $row["Chile_Huajillo"];
$arr["datos"][$i]["Chile_Jalapeno_RojoT"] = $row["Chile_Jalapeno_Rojo"];
$arr["datos"][$i]["Chile_Jalapeno_VerdeT"] = $row["Chile_Jalapeno_Verde"];
$arr["datos"][$i]["Chile_ManzanoT"] = $row["Chile_Manzano"];
$arr["datos"][$i]["Chile_MoritaT"] = $row["Chile_Morita"];
$arr["datos"][$i]["Chile_Morron_AmarilloT"] = $row["Chile_Morron_Amarillo"];
$arr["datos"][$i]["Chile_Morron_RojoT"] = $row["Chile_Morron_Rojo"];
$arr["datos"][$i]["Chile_Morron_VerdeT"] = $row["Chile_Morron_Verde"];
$arr["datos"][$i]["Chile_PasillaT"] = $row["Chile_Pasilla"];
$arr["datos"][$i]["Chile_PiquinT"] = $row["Chile_Piquin"];
$arr["datos"][$i]["Chile_PoblanoT"] = $row["Chile_Poblano"];
$arr["datos"][$i]["Chile_SerranoT"] = $row["Chile_Serrano"];
$arr["datos"][$i]["Chile_Serrano_VerdeT"] = $row["Chile_Serrano_Verde"];
$arr["datos"][$i]["Chle_HabaneroT"] = $row["Chle_Habanero"];
$arr["datos"][$i]["Chocolate_AbuelitaT"] = $row["Chocolate_Abuelita"];
$arr["datos"][$i]["CilantroT"] = $row["Cilantro"];
$arr["datos"][$i]["CiruelaT"] = $row["Ciruela"];
$arr["datos"][$i]["Coco_RayadoT"] = $row["Coco_Rayado"];
$arr["datos"][$i]["Col_MoradaT"] = $row["Col_Morada"];
$arr["datos"][$i]["Colador_De_Ac_Inox_De_15_CmT"] = $row["Colador_De_Ac_Inox_De_15_Cm"];
$arr["datos"][$i]["ColiflorT"] = $row["Coliflor"];
$arr["datos"][$i]["Comino_MolidoT"] = $row["Comino_Molido"];
$arr["datos"][$i]["Concentrado_De_JamaicaT"] = $row["Concentrado_De_Jamaica"];
$arr["datos"][$i]["DuraznoT"] = $row["Durazno"];
$arr["datos"][$i]["Ejote_VerdeT"] = $row["Ejote_Verde"];
$arr["datos"][$i]["Ejotes_VerdesT"] = $row["Ejotes_Verdes"];
$arr["datos"][$i]["Elote_Amarillo_EnteroT"] = $row["Elote_Amarillo_Entero"];
$arr["datos"][$i]["Elote_En_Grano_Amarillo_CongeladoT"] = $row["Elote_En_Grano_Amarillo_Congelado"];
$arr["datos"][$i]["Elote_EnteroT"] = $row["Elote_Entero"];
$arr["datos"][$i]["EneldoT"] = $row["Eneldo"];
$arr["datos"][$i]["Ensalada_De_Espinacas_384_GrT"] = $row["Ensalada_De_Espinacas_384_Gr"];
$arr["datos"][$i]["EpazoteT"] = $row["Epazote"];
$arr["datos"][$i]["Esparragos_VerdesT"] = $row["Esparragos_Verdes"];
$arr["datos"][$i]["EspinacasT"] = $row["Espinacas"];
$arr["datos"][$i]["Espinacas_PopeyeT"] = $row["Espinacas_Popeye"];
$arr["datos"][$i]["EucaliptoT"] = $row["Eucalipto"];
$arr["datos"][$i]["Eva_ItalianaT"] = $row["Eva_Italiana"];
$arr["datos"][$i]["Exprimidor_Manual_De_Limas_AmarillasT"] = $row["Exprimidor_Manual_De_Limas_Amarillas"];
$arr["datos"][$i]["Flor_ComestibleT"] = $row["Flor_Comestible"];
$arr["datos"][$i]["Flor_De_CalabazaT"] = $row["Flor_De_Calabaza"];
$arr["datos"][$i]["Flor_De_JamaicaT"] = $row["Flor_De_Jamaica"];
$arr["datos"][$i]["FrambuesasT"] = $row["Frambuesas"];
$arr["datos"][$i]["Frambuesas_CharolaT"] = $row["Frambuesas_Charola"];
$arr["datos"][$i]["FresasT"] = $row["Fresas"];
$arr["datos"][$i]["Frijol_PintoT"] = $row["Frijol_Pinto"];
$arr["datos"][$i]["Frijoles_BallosT"] = $row["Frijoles_Ballos"];
$arr["datos"][$i]["GarbanzoT"] = $row["Garbanzo"];
$arr["datos"][$i]["Garrafones_10_LitrosT"] = $row["Garrafones_10_Litros"];
$arr["datos"][$i]["GengibreT"] = $row["Gengibre"];
$arr["datos"][$i]["Gengibre_EnteroT"] = $row["Gengibre_Entero"];
$arr["datos"][$i]["Germen_De_AlfalfaT"] = $row["Germen_De_Alfalfa"];
$arr["datos"][$i]["Germen_De_SoyaT"] = $row["Germen_De_Soya"];
$arr["datos"][$i]["Germinado_De_AlfalfaT"] = $row["Germinado_De_Alfalfa"];
$arr["datos"][$i]["GranadaT"] = $row["Granada"];
$arr["datos"][$i]["GuayabaT"] = $row["Guayaba"];
$arr["datos"][$i]["Hiervabuena_FrescaT"] = $row["Hiervabuena_Fresca"];
$arr["datos"][$i]["HigosT"] = $row["Higos"];
$arr["datos"][$i]["HinojoT"] = $row["Hinojo"];
$arr["datos"][$i]["Hoja_De_PlatanoT"] = $row["Hoja_De_Platano"];
$arr["datos"][$i]["Hongo_CreminiT"] = $row["Hongo_Cremini"];
$arr["datos"][$i]["Hongo_Cremini_250_GrT"] = $row["Hongo_Cremini_250_Gr"];
$arr["datos"][$i]["Hongo_Cremini_BabyT"] = $row["Hongo_Cremini_Baby"];
$arr["datos"][$i]["Hongo_SetasT"] = $row["Hongo_Setas"];
$arr["datos"][$i]["Huevo_BlancoT"] = $row["Huevo_Blanco"];
$arr["datos"][$i]["Huevo_De_CorodnizT"] = $row["Huevo_De_Corodniz"];
$arr["datos"][$i]["HuitlacocheT"] = $row["Huitlacoche"];
$arr["datos"][$i]["JicamaT"] = $row["Jicama"];
$arr["datos"][$i]["Jugo_ArandanoT"] = $row["Jugo_Arandano"];
$arr["datos"][$i]["Jugo_De_LimonT"] = $row["Jugo_De_Limon"];
$arr["datos"][$i]["Jugo_De_NaranjaT"] = $row["Jugo_De_Naranja"];
$arr["datos"][$i]["Kale_BolsaT"] = $row["Kale_Bolsa"];
$arr["datos"][$i]["Kiwi_ChilenoT"] = $row["Kiwi_Chileno"];
$arr["datos"][$i]["Knor_SuizoT"] = $row["Knor_Suizo"];
$arr["datos"][$i]["Knor_TomateT"] = $row["Knor_Tomate"];
$arr["datos"][$i]["LaurelT"] = $row["Laurel"];
$arr["datos"][$i]["Lechuga_Baby_ArugulaT"] = $row["Lechuga_Baby_Arugula"];
$arr["datos"][$i]["Lechuga_Boston_GrandeT"] = $row["Lechuga_Boston_Grande"];
$arr["datos"][$i]["Lechuga_ItalianaT"] = $row["Lechuga_Italiana"];
$arr["datos"][$i]["Lechuga_NapaT"] = $row["Lechuga_Napa"];
$arr["datos"][$i]["Lechuga_OrejonaT"] = $row["Lechuga_Orejona"];
$arr["datos"][$i]["Lechuga_Punta_RojaT"] = $row["Lechuga_Punta_Roja"];
$arr["datos"][$i]["Lechuga_RomanaT"] = $row["Lechuga_Romana"];
$arr["datos"][$i]["Lentejas_A_GranelT"] = $row["Lentejas_A_Granel"];
$arr["datos"][$i]["Limon_AmarilloT"] = $row["Limon_Amarillo"];
$arr["datos"][$i]["Limon_VerdeT"] = $row["Limon_Verde"];
$arr["datos"][$i]["Limon_Verde_Sin_SemillaT"] = $row["Limon_Verde_Sin_Semilla"];
$arr["datos"][$i]["Maiz_PozoleroT"] = $row["Maiz_Pozolero"];
$arr["datos"][$i]["MandarinaT"] = $row["Mandarina"];
$arr["datos"][$i]["Mango_AtaulfoT"] = $row["Mango_Ataulfo"];
$arr["datos"][$i]["Manzana_Golden_AmarillaT"] = $row["Manzana_Golden_Amarilla"];
$arr["datos"][$i]["Manzana_Granny_SmitT"] = $row["Manzana_Granny_Smit"];
$arr["datos"][$i]["Manzana_Red_DeliciosT"] = $row["Manzana_Red_Delicios"];
$arr["datos"][$i]["MaracuyaT"] = $row["Maracuya"];
$arr["datos"][$i]["Masa_De_TortillaT"] = $row["Masa_De_Tortilla"];
$arr["datos"][$i]["MasecaT"] = $row["Maseca"];
$arr["datos"][$i]["MelonT"] = $row["Melon"];
$arr["datos"][$i]["MentaT"] = $row["Menta"];
$arr["datos"][$i]["Microdin_Desinfectante_1LT"] = $row["Microdin_Desinfectante_1L"];
$arr["datos"][$i]["MoleT"] = $row["Mole"];
$arr["datos"][$i]["NaboT"] = $row["Nabo"];
$arr["datos"][$i]["Naranja_ValenciaT"] = $row["Naranja_Valencia"];
$arr["datos"][$i]["Nopal_EnteroT"] = $row["Nopal_Entero"];
$arr["datos"][$i]["Nopalito_PicadoT"] = $row["Nopalito_Picado"];
$arr["datos"][$i]["Nuez_CorazonT"] = $row["Nuez_Corazon"];
$arr["datos"][$i]["Nuez_MoscadaT"] = $row["Nuez_Moscada"];
$arr["datos"][$i]["Oregano_CoahuilaT"] = $row["Oregano_Coahuila"];
$arr["datos"][$i]["Pan_De_Hamburguesa_BolsaT"] = $row["Pan_De_Hamburguesa_Bolsa"];
$arr["datos"][$i]["Pan_HamburguesaT"] = $row["Pan_Hamburguesa"];
$arr["datos"][$i]["Pan_Hot_DogT"] = $row["Pan_Hot_Dog"];
$arr["datos"][$i]["Pan_TeleraT"] = $row["Pan_Telera"];
$arr["datos"][$i]["Papa_BlancaT"] = $row["Papa_Blanca"];
$arr["datos"][$i]["Papa_GaleanaT"] = $row["Papa_Galeana"];
$arr["datos"][$i]["Papa_SegundaT"] = $row["Papa_Segunda"];
$arr["datos"][$i]["Papa_TerceraT"] = $row["Papa_Tercera"];
$arr["datos"][$i]["Papas_A_La_FrancesaT"] = $row["Papas_A_La_Francesa"];
$arr["datos"][$i]["Papaya_MaradolT"] = $row["Papaya_Maradol"];
$arr["datos"][$i]["Pepino_BabyT"] = $row["Pepino_Baby"];
$arr["datos"][$i]["Pepino_GrandeT"] = $row["Pepino_Grande"];
$arr["datos"][$i]["Pera_De_AnjouT"] = $row["Pera_De_Anjou"];
$arr["datos"][$i]["Perejil_ChinoT"] = $row["Perejil_Chino"];
$arr["datos"][$i]["Perejil_LisoT"] = $row["Perejil_Liso"];
$arr["datos"][$i]["PiloncilloT"] = $row["Piloncillo"];
$arr["datos"][$i]["Pimienta_Blanca_Frasco_48GT"] = $row["Pimienta_Blanca_Frasco_48G"];
$arr["datos"][$i]["Pimienta_Entera_NegraT"] = $row["Pimienta_Entera_Negra"];
$arr["datos"][$i]["Pimienta_Negra_MolidaT"] = $row["Pimienta_Negra_Molida"];
$arr["datos"][$i]["PinaT"] = $row["Pina"];
$arr["datos"][$i]["Pina_MielT"] = $row["Pina_Miel"];
$arr["datos"][$i]["Platano_ChiapasT"] = $row["Platano_Chiapas"];
$arr["datos"][$i]["Platano_MachoT"] = $row["Platano_Macho"];
$arr["datos"][$i]["Platano_TabascoT"] = $row["Platano_Tabasco"];
$arr["datos"][$i]["Pure_De_TomateT"] = $row["Pure_De_Tomate"];
$arr["datos"][$i]["Quelites_100_GrT"] = $row["Quelites_100_Gr"];
$arr["datos"][$i]["RabanoT"] = $row["Rabano"];
$arr["datos"][$i]["Rabano_LargoT"] = $row["Rabano_Largo"];
$arr["datos"][$i]["Repollo_BlancoT"] = $row["Repollo_Blanco"];
$arr["datos"][$i]["Repollo_MoradoT"] = $row["Repollo_Morado"];
$arr["datos"][$i]["Romerito_FrescoT"] = $row["Romerito_Fresco"];
$arr["datos"][$i]["Romero_Macho_FrescoT"] = $row["Romero_Macho_Fresco"];
$arr["datos"][$i]["Sandia_Roja_RayadaT"] = $row["Sandia_Roja_Rayada"];
$arr["datos"][$i]["Semilla_De_CacaoT"] = $row["Semilla_De_Cacao"];
$arr["datos"][$i]["Semilla_De_MostazaT"] = $row["Semilla_De_Mostaza"];
$arr["datos"][$i]["Semilla_De_Mostaza_AmarillaT"] = $row["Semilla_De_Mostaza_Amarilla"];
$arr["datos"][$i]["Semillas_De_GirasolT"] = $row["Semillas_De_Girasol"];
$arr["datos"][$i]["Spring_MixT"] = $row["Spring_Mix"];
$arr["datos"][$i]["Spring_Mix_Organica_CharolaT"] = $row["Spring_Mix_Organica_Charola"];
$arr["datos"][$i]["Tomate_CherryT"] = $row["Tomate_Cherry"];
$arr["datos"][$i]["Tomate_HuajeT"] = $row["Tomate_Huaje"];
$arr["datos"][$i]["Tomate_Huaje_SegundaT"] = $row["Tomate_Huaje_Segunda"];
$arr["datos"][$i]["Tomatillo_VerdeT"] = $row["Tomatillo_Verde"];
$arr["datos"][$i]["Tomillo_FrescoT"] = $row["Tomillo_Fresco"];
$arr["datos"][$i]["ToronjaT"] = $row["Toronja"];
$arr["datos"][$i]["Tortillas_De_HarinaT"] = $row["Tortillas_De_Harina"];
$arr["datos"][$i]["Tortillas_MaizT"] = $row["Tortillas_Maiz"];
$arr["datos"][$i]["TunaT"] = $row["Tuna"];
$arr["datos"][$i]["Uva_Negra_Sin_SemillaT"] = $row["Uva_Negra_Sin_Semilla"];
$arr["datos"][$i]["Uva_Roja_Sin_SemillaT"] = $row["Uva_Roja_Sin_Semilla"];
$arr["datos"][$i]["Uva_Verde_Sin_SemillaT"] = $row["Uva_Verde_Sin_Semilla"];
$arr["datos"][$i]["Uvas_Moradas_Sin_SemillaT"] = $row["Uvas_Moradas_Sin_Semilla"];
$arr["datos"][$i]["XoconostleT"] = $row["Xoconostle"];
$arr["datos"][$i]["Yogurt_NaturalT"] = $row["Yogurt_Natural"];
$arr["datos"][$i]["Zacate_LimonT"] = $row["Zacate_Limon"];
$arr["datos"][$i]["ZanahoriaT"] = $row["Zanahoria"];
$arr["datos"][$i]["Zanahoria_BabyT"] = $row["Zanahoria_Baby"];
$arr["datos"][$i]["Zanahoria_LenaT"] = $row["Zanahoria_Lena"];
$arr["datos"][$i]["ZarzamoraT"] = $row["Zarzamora"];
$arr["datos"][$i]["Zarzamora_CharolaT"] = $row["Zarzamora_Charola"];

		$i++;

	}
	echo json_encode($arr);

?>