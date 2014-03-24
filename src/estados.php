<?php
# Primero los nombres de los edos en un array para agregarlos
$nombres_estados =
array(
    '', # Para que coincidan 1..32 (no 0..31)
    'AGUASCALIENTES',
    'BAJA CALIFORNIA',
    'BAJA CALIFORNIA SUR',
    'CAMPECHE',
    'COAHUILA',
    'COLIMA',
    'CHIAPAS',
    'CHIHUAHUA',
    'DISTRITO FEDERAL',
    'DURANGO',
    'GUANAJUATO',
    'GUERRERO',
    'HIDALGO',
    'JALISCO',
    'MEXICO',
    'MICHOACAN',
    'MORELOS',
    'NAYARIT',
    'NUEVO LEON',
    'OAXACA',
    'PUEBLA',
    'QUERETARO',
    'QUINTANA ROO',
    'SAN LUIS POTOSI',
    'SINALOA',
    'SONORA',
    'TABASCO',
    'TAMAULIPAS',
    'TLAXCALA',
    'VERACRUZ',
    'YUCATAN',
    'ZACATECAS',
);

# Ahora los estados (de curl_estados.php)
$estados = [
   array()
   ,
   array(
      'id'=>'1',
      'municipios'=>[

         [
            '1',
            'AGUASCALIENTES'
         ],
         [
            '3',
            'CALVILLO'
         ],
         [
            '5',
            'JESUS MARIA'
         ]
      ]
   ),
   array(
      'id'=>'2',
      'municipios'=>[

         [
            '1',
            'ENSENADA'
         ],
         [
            '2',
            'MEXICALI'
         ],
         [
            '5',
            'PLAYAS DE ROSARITO'
         ],
         [
            '3',
            'TECATE'
         ],
         [
            '4',
            'TIJUANA'
         ]
      ]
   ),
   array(
      'id'=>'3',
      'municipios'=>[

         [
            '1',
            'COMONDU'
         ],
         [
            '3',
            'LA PAZ'
         ],
         [
            '4',
            'LOS CABOS'
         ],
         [
            '2',
            'MULEGE'
         ]
      ]
   ),
   array(
      'id'=>'4',
      'municipios'=>[

         [
            '1',
            'CAMPECHE'
         ],
         [
            '3',
            'CARMEN'
         ]
      ]
   ),
   array(
      'id'=>'5',
      'municipios'=>[

         [
            '2',
            'ACUÑA'
         ],
         [
            '10',
            'FRONTERA'
         ],
         [
            '17',
            'MATAMOROS'
         ],
         [
            '18',
            'MONCLOVA'
         ],
         [
            '25',
            'PIEDRAS NEGRAS'
         ],
         [
            '28',
            'SABINAS'
         ],
         [
            '30',
            'SALTILLO'
         ],
         [
            '33',
            'SAN PEDRO'
         ],
         [
            '35',
            'TORREON'
         ]
      ]
   ),
   array(
      'id'=>'6',
      'municipios'=>[

         [
            '1',
            'COLIMA'
         ],
         [
            '8',
            'MANZANILLO'
         ],
         [
            '10',
            'TECOMAN'
         ],
         [
            '5',
            'VILLA DE ALVAREZ'
         ]
      ]
   ),
   array(
      'id'=>'7',
      'municipios'=>[

         [
            '13',
            'BOCHIL'
         ],
         [
            '23',
            'CHAMULA'
         ],
         [
            '17',
            'CINTALAPA'
         ],
         [
            '19',
            'COMITAN DE DOMINGUEZ'
         ],
         [
            '40',
            'HUIXTLA'
         ],
         [
            '59',
            'OCOSINGO'
         ],
         [
            '61',
            'OCOZOCOAUTLA DE ESPINOSA'
         ],
         [
            '65',
            'PALENQUE'
         ],
         [
            '68',
            'PICHUCALCO'
         ],
         [
            '77',
            'SAN CRISTOBAL DE LAS CASAS'
         ],
         [
            '90',
            'TAPACHULA'
         ],
         [
            '97',
            'TONALA'
         ],
         [
            '102',
            'TUXTLA GUTIERREZ'
         ],
         [
            '109',
            'VILLAFLORES'
         ]
      ]
   ),
   array(
      'id'=>'8',
      'municipios'=>[

         [
            '19',
            'CHIHUAHUA'
         ],
         [
            '17',
            'CUAUHTEMOC'
         ],
         [
            '21',
            'DELICIAS'
         ],
         [
            '32',
            'HIDALGO DEL PARRAL'
         ],
         [
            '37',
            'JUAREZ'
         ],
         [
            '50',
            'NUEVO CASAS GRANDES'
         ]
      ]
   ),
   array(
      'id'=>'9',
      'municipios'=>[

         [
            '10',
            'ALVARO OBREGON'
         ],
         [
            '2',
            'AZCAPOTZALCO'
         ],
         [
            '14',
            'BENITO JUAREZ'
         ],
         [
            '3',
            'COYOACAN'
         ],
         [
            '4',
            'CUAJIMALPA DE MORELOS'
         ],
         [
            '15',
            'CUAUHTEMOC'
         ],
         [
            '5',
            'GUSTAVO A. MADERO'
         ],
         [
            '6',
            'IZTACALCO'
         ],
         [
            '7',
            'IZTAPALAPA'
         ],
         [
            '8',
            'LA MAGDALENA CONTRERAS'
         ],
         [
            '16',
            'MIGUEL HIDALGO'
         ],
         [
            '11',
            'TLAHUAC'
         ],
         [
            '12',
            'TLALPAN'
         ],
         [
            '17',
            'VENUSTIANO CARRANZA'
         ],
         [
            '13',
            'XOCHIMILCO'
         ]
      ]
   ),
   array(
      'id'=>'10',
      'municipios'=>[

         [
            '5',
            'DURANGO'
         ],
         [
            '7',
            'GOMEZ PALACIO'
         ],
         [
            '8',
            'GUADALUPE VICTORIA'
         ],
         [
            '12',
            'LERDO'
         ],
         [
            '33',
            'SANTIAGO PAPASQUIARO'
         ]
      ]
   ),
   array(
      'id'=>'11',
      'municipios'=>[

         [
            '1',
            'ABASOLO'
         ],
         [
            '2',
            'ACAMBARO'
         ],
         [
            '5',
            'APASEO EL GRANDE'
         ],
         [
            '7',
            'CELAYA'
         ],
         [
            '9',
            'COMONFORT'
         ],
         [
            '11',
            'CORTAZAR'
         ],
         [
            '15',
            'GUANAJUATO'
         ],
         [
            '17',
            'IRAPUATO'
         ],
         [
            '20',
            'LEON'
         ],
         [
            '23',
            'PENJAMO'
         ],
         [
            '27',
            'SALAMANCA'
         ],
         [
            '30',
            'SAN FELIPE'
         ],
         [
            '31',
            'SAN FRANCISCO DEL RINCON'
         ],
         [
            '32',
            'SAN JOSE ITURBIDE'
         ],
         [
            '33',
            'SAN LUIS DE LA PAZ'
         ],
         [
            '3',
            'SAN MIGUEL DE ALLENDE'
         ],
         [
            '35',
            'SANTA CRUZ DE JUVENTINO ROSAS'
         ],
         [
            '37',
            'SILAO'
         ],
         [
            '41',
            'URIANGATO'
         ],
         [
            '42',
            'VALLE DE SANTIAGO'
         ],
         [
            '44',
            'VILLAGRAN'
         ]
      ]
   ),
   array(
      'id'=>'12',
      'municipios'=>[

         [
            '1',
            'ACAPULCO DE JUAREZ'
         ],
         [
            '12',
            'AYUTLA DE LOS LIBRES'
         ],
         [
            '28',
            'CHILAPA DE ALVAREZ'
         ],
         [
            '29',
            'CHILPANCINGO DE LOS BRAVO'
         ],
         [
            '36',
            'IGUALA DE LA INDEPENDENCIA'
         ],
         [
            '51',
            'PUNGARABATO'
         ],
         [
            '56',
            'TAXCO DE ALARCON'
         ],
         [
            '67',
            'TLAPA DE COMONFORT'
         ],
         [
            '39',
            'ZIHUATANEJO DE AZUETA'
         ]
      ]
   ),
   array(
      'id'=>'13',
      'municipios'=>[

         [
            '3',
            'ACTOPAN'
         ],
         [
            '15',
            'CUAUTEPEC DE HINOJOSA'
         ],
         [
            '28',
            'HUEJUTLA DE REYES'
         ],
         [
            '29',
            'HUICHAPAN'
         ],
         [
            '30',
            'IXMIQUILPAN'
         ],
         [
            '47',
            'PACHUCA DE SOTO'
         ],
         [
            '61',
            'TEPEAPULCO'
         ],
         [
            '73',
            'TLAXCOAPAN'
         ],
         [
            '75',
            'TULA DE ALLENDE'
         ],
         [
            '76',
            'TULANCINGO DE BRAVO'
         ]
      ]
   ),
   array(
      'id'=>'14',
      'municipios'=>[

         [
            '6',
            'AMECA'
         ],
         [
            '8',
            'ARANDAS'
         ],
         [
            '13',
            'ATOTONILCO EL ALTO'
         ],
         [
            '15',
            'AUTLAN DE NAVARRO'
         ],
         [
            '26',
            'COLOTLAN'
         ],
         [
            '41',
            'GUADALAJARA'
         ],
         [
            '52',
            'JOCOTEPEC'
         ],
         [
            '18',
            'LA BARCA'
         ],
         [
            '55',
            'LAGOS DE MORENO'
         ],
         [
            '69',
            'PUERTO VALLARTA'
         ],
         [
            '75',
            'SAN JUAN DE LOS LAGOS'
         ],
         [
            '94',
            'TEPATITLAN DE MORELOS'
         ],
         [
            '95',
            'TEQUILA'
         ],
         [
            '98',
            'TLAJOMULCO DE ZUÑIGA'
         ],
         [
            '99',
            'TLAQUEPAQUE'
         ],
         [
            '102',
            'TONALA'
         ],
         [
            '120',
            'ZAPOPAN'
         ],
         [
            '23',
            'ZAPOTLAN EL GRANDE'
         ],
         [
            '124',
            'ZAPOTLANEJO'
         ]
      ]
   ),
   array(
      'id'=>'15',
      'municipios'=>[

         [
            '13',
            'ATIZAPAN DE ZARAGOZA'
         ],
         [
            '14',
            'ATLACOMULCO'
         ],
         [
            '26',
            'CHALCO'
         ],
         [
            '32',
            'CHIMALHUACAN'
         ],
         [
            '20',
            'COACALCO DE BERRIOZABAL'
         ],
         [
            '24',
            'CUAUTITLAN'
         ],
         [
            '25',
            'CUAUTITLAN IZCALLI'
         ],
         [
            '34',
            'ECATEPEC DE MORELOS'
         ],
         [
            '38',
            'HUIXQUILUCAN'
         ],
         [
            '40',
            'IXTAPALUCA'
         ],
         [
            '43',
            'IXTLAHUACA'
         ],
         [
            '46',
            'JILOTEPEC'
         ],
         [
            '71',
            'LA PAZ'
         ],
         [
            '55',
            'METEPEC'
         ],
         [
            '58',
            'NAUCALPAN DE JUAREZ'
         ],
         [
            '60',
            'NEZAHUALCOYOTL'
         ],
         [
            '61',
            'NICOLAS ROMERO'
         ],
         [
            '75',
            'SAN FELIPE DEL PROGRESO'
         ],
         [
            '124',
            'SAN JOSE DEL RINCON'
         ],
         [
            '82',
            'TECAMAC'
         ],
         [
            '83',
            'TEJUPILCO'
         ],
         [
            '89',
            'TENANCINGO'
         ],
         [
            '92',
            'TEOLOYUCAN'
         ],
         [
            '93',
            'TEOTIHUACAN'
         ],
         [
            '100',
            'TEXCOCO'
         ],
         [
            '105',
            'TLALNEPANTLA DE BAZ'
         ],
         [
            '107',
            'TOLUCA'
         ],
         [
            '110',
            'TULTITLAN'
         ],
         [
            '111',
            'VALLE DE BRAVO'
         ],
         [
            '122',
            'VALLE DE CHALCO SOLIDARIDAD'
         ],
         [
            '116',
            'XONACATLAN'
         ],
         [
            '119',
            'ZINACANTEPEC'
         ],
         [
            '121',
            'ZUMPANGO'
         ]
      ]
   ),
   array(
      'id'=>'16',
      'municipios'=>[

         [
            '6',
            'APATZINGAN'
         ],
         [
            '34',
            'HIDALGO'
         ],
         [
            '43',
            'JACONA'
         ],
         [
            '45',
            'JIQUILPAN'
         ],
         [
            '70',
            'LA PIEDAD'
         ],
         [
            '50',
            'LAZARO CARDENAS'
         ],
         [
            '76',
            'LOS REYES'
         ],
         [
            '54',
            'MORELIA'
         ],
         [
            '67',
            'PATZCUARO'
         ],
         [
            '72',
            'PURUANDIRO'
         ],
         [
            '83',
            'TACAMBARO'
         ],
         [
            '103',
            'URUAPAN'
         ],
         [
            '108',
            'ZACAPU'
         ],
         [
            '109',
            'ZAMORA'
         ],
         [
            '113',
            'ZITACUARO'
         ]
      ]
   ),
   array(
      'id'=>'17',
      'municipios'=>[

         [
            '6',
            'CUAUTLA'
         ],
         [
            '7',
            'CUERNAVACA'
         ],
         [
            '8',
            'EMILIANO ZAPATA'
         ],
         [
            '11',
            'JIUTEPEC'
         ],
         [
            '12',
            'JOJUTLA'
         ],
         [
            '18',
            'TEMIXCO'
         ],
         [
            '29',
            'YAUTEPEC'
         ]
      ]
   ),
   array(
      'id'=>'18',
      'municipios'=>[

         [
            '4',
            'BAHIA DE BANDERAS'
         ],
         [
            '5',
            'COMPOSTELA'
         ],
         [
            '15',
            'SANTIAGO IXCUINTLA'
         ],
         [
            '17',
            'TEPIC'
         ]
      ]
   ),
   array(
      'id'=>'19',
      'municipios'=>[

         [
            '6',
            'APODACA'
         ],
         [
            '9',
            'CADEREYTA JIMENEZ'
         ],
         [
            '18',
            'GARCIA'
         ],
         [
            '21',
            'GRAL. ESCOBEDO'
         ],
         [
            '26',
            'GUADALUPE'
         ],
         [
            '32',
            'JUAREZ'
         ],
         [
            '34',
            'LINARES'
         ],
         [
            '40',
            'MONTERREY'
         ],
         [
            '47',
            'SAN NICOLAS DE LOS GARZA'
         ],
         [
            '19',
            'SAN PEDRO GARZA GARCIA'
         ],
         [
            '48',
            'SANTA CATARINA'
         ]
      ]
   ),
   array(
      'id'=>'20',
      'municipios'=>[

         [
            '7',
            'ASUNCION NOCHIXTLAN'
         ],
         [
            '37',
            'HEROICA CIUDAD DE HUAJUAPAN DE LEON'
         ],
         [
            '553',
            'HEROICA CIUDAD DE TLAXIACO'
         ],
         [
            '43',
            'JUCHITAN DE ZARAGOZA'
         ],
         [
            '59',
            'MIAHUATLAN DE PORFIRIO DIAZ'
         ],
         [
            '66',
            'OAXACA DE JUAREZ'
         ],
         [
            '182',
            'SAN JUAN BAUTISTA TUXTEPEC'
         ],
         [
            '316',
            'SAN PEDRO MIXTEPEC'
         ],
         [
            '392',
            'SANTA LUCIA DEL CAMINO'
         ],
         [
            '484',
            'SANTIAGO PINOTEPA NACIONAL'
         ],
         [
            '515',
            'SANTO DOMINGO TEHUANTEPEC'
         ],
         [
            '545',
            'TEOTITLAN DE FLORES MAGON'
         ],
         [
            '550',
            'TLACOLULA DE MATAMOROS'
         ]
      ]
   ),
   array(
      'id'=>'21',
      'municipios'=>[

         [
            '3',
            'ACATLAN'
         ],
         [
            '10',
            'AJALPAN'
         ],
         [
            '15',
            'AMOZOC'
         ],
         [
            '19',
            'ATLIXCO'
         ],
         [
            '46',
            'CHALCHICOMULA DE SESMA'
         ],
         [
            '42',
            'CUAUTLANCINGO'
         ],
         [
            '72',
            'HUAUCHINANGO'
         ],
         [
            '76',
            'HUEJOTZINGO'
         ],
         [
            '87',
            'IZUCAR DE MATAMOROS'
         ],
         [
            '115',
            'PUEBLA'
         ],
         [
            '133',
            'SAN MARTIN TEXMELUCAN'
         ],
         [
            '141',
            'SAN PEDRO CHOLULA'
         ],
         [
            '153',
            'TECAMACHALCO'
         ],
         [
            '155',
            'TEHUACAN'
         ],
         [
            '163',
            'TEPEACA'
         ],
         [
            '173',
            'TEZIUTLAN'
         ],
         [
            '197',
            'XICOTEPEC'
         ],
         [
            '207',
            'ZACAPOAXTLA'
         ],
         [
            '208',
            'ZACATLAN'
         ]
      ]
   ),
   array(
      'id'=>'22',
      'municipios'=>[

         [
            '3',
            'CADEREYTA DE MONTES'
         ],
         [
            '5',
            'CORREGIDORA'
         ],
         [
            '14',
            'QUERETARO'
         ],
         [
            '16',
            'SAN JUAN DEL RIO'
         ]
      ]
   ),
   array(
      'id'=>'23',
      'municipios'=>[

         [
            '1',
            'BENITO JUAREZ'
         ],
         [
            '7',
            'OTHON P. BLANCO'
         ],
         [
            '8',
            'SOLIDARIDAD'
         ]
      ]
   ),
   array(
      'id'=>'24',
      'municipios'=>[

         [
            '13',
            'CIUDAD VALLES'
         ],
         [
            '20',
            'MATEHUALA'
         ],
         [
            '24',
            'RIOVERDE'
         ],
         [
            '28',
            'SAN LUIS POTOSI'
         ],
         [
            '35',
            'SOLEDAD DE GRACIANO SANCHEZ'
         ],
         [
            '37',
            'TAMAZUNCHALE'
         ]
      ]
   ),
   array(
      'id'=>'25',
      'municipios'=>[

         [
            '1',
            'AHOME'
         ],
         [
            '6',
            'CULIACAN'
         ],
         [
            '10',
            'EL FUERTE'
         ],
         [
            '9',
            'ESCUINAPA'
         ],
         [
            '11',
            'GUASAVE'
         ],
         [
            '12',
            'MAZATLAN'
         ],
         [
            '18',
            'NAVOLATO'
         ],
         [
            '15',
            'SALVADOR ALVARADO'
         ],
         [
            '17',
            'SINALOA'
         ]
      ]
   ),
   array(
      'id'=>'26',
      'municipios'=>[

         [
            '2',
            'AGUA PRIETA'
         ],
         [
            '46',
            'CABORCA'
         ],
         [
            '59',
            'CAJEME'
         ],
         [
            '61',
            'GUAYMAS'
         ],
         [
            '49',
            'HERMOSILLO'
         ],
         [
            '65',
            'NAVOJOA'
         ],
         [
            '30',
            'NOGALES'
         ],
         [
            '55',
            'SAN LUIS RIO COLORADO'
         ]
      ]
   ),
   array(
      'id'=>'27',
      'municipios'=>[

         [
            '2',
            'CARDENAS'
         ],
         [
            '4',
            'CENTRO'
         ],
         [
            '5',
            'COMALCALCO'
         ],
         [
            '6',
            'CUNDUACAN'
         ],
         [
            '8',
            'HUIMANGUILLO'
         ],
         [
            '12',
            'MACUSPANA'
         ],
         [
            '14',
            'PARAISO'
         ]
      ]
   ),
   array(
      'id'=>'28',
      'municipios'=>[

         [
            '9',
            'CIUDAD MADERO'
         ],
         [
            '21',
            'EL MANTE'
         ],
         [
            '22',
            'MATAMOROS'
         ],
         [
            '27',
            'NUEVO LAREDO'
         ],
         [
            '32',
            'REYNOSA'
         ],
         [
            '33',
            'RIO BRAVO'
         ],
         [
            '38',
            'TAMPICO'
         ],
         [
            '41',
            'VICTORIA'
         ]
      ]
   ),
   array(
      'id'=>'29',
      'municipios'=>[

         [
            '3',
            'APIZACO'
         ],
         [
            '10',
            'CHIAUTEMPAN'
         ],
         [
            '25',
            'SAN PABLO DEL MONTE'
         ],
         [
            '33',
            'TLAXCALA'
         ],
         [
            '44',
            'ZACATELCO'
         ]
      ]
   ),
   array(
      'id'=>'30',
      'municipios'=>[

         [
            '3',
            'ACAYUCAN'
         ],
         [
            '8',
            'ALAMO TEMAPACHE'
         ],
         [
            '12',
            'ALVARADO'
         ],
         [
            '29',
            'BOCA DEL RIO'
         ],
         [
            '40',
            'COATEPEC'
         ],
         [
            '41',
            'COATZACOALCOS'
         ],
         [
            '46',
            'CORDOBA'
         ],
         [
            '47',
            'COSAMALOAPAN'
         ],
         [
            '49',
            'COSCOMATEPEC'
         ],
         [
            '50',
            'COSOLEACAQUE'
         ],
         [
            '73',
            'HUATUSCO'
         ],
         [
            '17',
            'LA ANTIGUA'
         ],
         [
            '63',
            'LAS CHOAPAS'
         ],
         [
            '103',
            'MARTINEZ DE LA TORRE'
         ],
         [
            '109',
            'MINATITLAN'
         ],
         [
            '205',
            'NANCHITAL DE LAZARO CARDENAS DEL RIO'
         ],
         [
            '119',
            'ORIZABA'
         ],
         [
            '124',
            'PANUCO'
         ],
         [
            '125',
            'PAPANTLA'
         ],
         [
            '129',
            'PEROTE'
         ],
         [
            '132',
            'POZA RICA DE HIDALGO'
         ],
         [
            '142',
            'SAN ANDRES TUXTLA'
         ],
         [
            '144',
            'SANTIAGO TUXTLA'
         ],
         [
            '156',
            'TANTOYUCA'
         ],
         [
            '173',
            'TIERRA BLANCA'
         ],
         [
            '188',
            'TUXPAN'
         ],
         [
            '192',
            'VERACRUZ'
         ],
         [
            '89',
            'XALAPA'
         ],
         [
            '201',
            'ZONGOLICA'
         ]
      ]
   ),
   array(
      'id'=>'31',
      'municipios'=>[

         [
            '50',
            'MERIDA'
         ],
         [
            '59',
            'PROGRESO'
         ],
         [
            '102',
            'VALLADOLID'
         ]
      ]
   ),
   array(
      'id'=>'32',
      'municipios'=>[

         [
            '17',
            'GUADALUPE'
         ],
         [
            '20',
            'JEREZ'
         ],
         [
            '56',
            'ZACATECAS'
         ]
      ]
   )
];
