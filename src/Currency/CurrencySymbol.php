<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

enum CurrencySymbol: string
{
    case Afghani            = '؋';
    case Algerian_Dinar     = 'دج';
    case Armenian_Dram      = '֏';
    case Aruban_Florin      = 'ƒ';
    case Azerbaijan_Manat   = '₼';
    case Bahraini_Dinar     = '.د.ب';
    case Baht               = '฿';
    case Balboa             = 'B/.';
    case Belarusian_Ruble   = 'Br';
    case Bolivar_Soberano   = 'Bs.';
    case Boliviano          = 'Bs';
    case Brazilian_Real     = 'R$';
    case Brunei_Dollar      = 'B$';
    case Bulgarian_Lev      = 'Лв';
    case Burundi_Franc      = 'FBu';
    case Cent               = '¢';
    case Costa_Rican_Colon  = '₡';
    case Dollar             = '$';
    case Comorian_Franc     = 'CF';
    case Congolose_Franc    = 'FC';
    case Convertable_Mark   = 'KM';
    case Cordoba_Oro        = 'C$';
    case Czech_Koruna       = 'Kč';
    case Dalasi             = 'D';
    case Danish_Krone       = 'Kr.';
    case Denar              = 'Ден';
    case Djibouti_Franc     = 'Fdj';
    case Dobra              = 'Db';
    case Dong               = '₫';
    case Egyptian_Pound     = '.ج.م';
    case Euro               = '€';
    case El_Salvador_Colon  = 'SVC';
    case Ethiopian_Birr     = 'ብር';
    case Fils               = 'فلس';
    case Forint             = 'Ft';
    case Generic            = '¤';
    case Ghana_Cedi         = '₵';
    case Gourde             = 'G';
    case Guarani            = '₲';
    case Guinean_Franc      = 'FG';
    case Iceland_Krona      = 'kr';
    case Hryvnia            = '₴';
    case Indian_Rupee       = '₹';
    case Iranian_Rial       = '﷼';
    case Iraqi_Dinar        = '.د.ع';
    case Jordanian_Dinar    = 'د.ا';
    case Kenyan_Shilling    = 'KSh';
    case Kina               = 'K';
    case Kuwait_Dinar       = 'د.ك';
    case Kyat               = 'Ks.';
    case Kwanza             = 'Kz';
    case Lao_Kip            = '₭';
    case Lari               = '₾';
    case Lebanese_Pound     = '.ل.ل';
    case L                  = 'L';
    case Le                 = 'Le';
    case LD                 = 'LD';
    case Moroccan_Dirham    = '.د.م';
    case Malagasy_Ariary    = 'Ar';
    case Malaysian_Ringgit  = 'RM';
    case Mauritius_Rupee    = 'Re';
    case Mozambique_Metical = 'MT';
    case Naira              = '₦';
    case Netherlands_Antillean_Guilder = 'NAƒ';
    case New_Israeli_Sheqel = '₪';
    case New_Taiwan_Dollar = 'NT$';
    case Philippine_Peso    = '₱';
    case Pound              = '£';
    case Qatari_Rial        = '.ر.ق';
    case Rial_Omani         = '.ر.ع';
    case Riel               = '៛';
    case Rufiyaa            = 'ރ';
    case Russian_Ruble      = '₽';
    case Saudi_Riyal        = '.ر.س';
    case Taka               = '৳';
    case Tenge              = '₸';
    case Turkish_Lira       = '₺';
    case UAE_Dirham         = '.د.إ';
    case Won                = '₩';
    case Yemeni_Rial        = '.ر.ي';
    case Yen                = '¥';

    public static function forCurrency(CurrencyAlpha3|CurrencyName|CurrencyNumeric $currency): ?self
    {
        if ($currency instanceof CurrencyAlpha3 === false) {
            $currency = $currency->toCurrencyAlpha3();
        }

        return match($currency) {
            CurrencyAlpha3::ADB_Unit_of_Account                                               => null,
            CurrencyAlpha3::Afghani                                                           => self::Afghani,
            CurrencyAlpha3::Algerian_Dinar                                                    => self::Algerian_Dinar,
            CurrencyAlpha3::Argentine_Peso                                                    => self::Dollar,
            CurrencyAlpha3::Armenian_Dram                                                     => self::Armenian_Dram,
            CurrencyAlpha3::Aruban_Florin                                                     => self::Aruban_Florin,
            CurrencyAlpha3::Australian_Dollar                                                 => self::Dollar,
            CurrencyAlpha3::Azerbaijan_Manat                                                  => self::Azerbaijan_Manat,
            CurrencyAlpha3::Bahamian_Dollar                                                   => self::Dollar,
            CurrencyAlpha3::Bahraini_Dinar                                                    => self::Bahraini_Dinar,
            CurrencyAlpha3::Baht                                                              => self::Baht,
            CurrencyAlpha3::Balboa                                                            => self::Balboa,
            CurrencyAlpha3::Barbados_Dollar                                                   => self::Dollar,
            CurrencyAlpha3::Belarusian_Ruble                                                  => self::Belarusian_Ruble,
            CurrencyAlpha3::Belize_Dollar                                                     => self::Dollar,
            CurrencyAlpha3::Bermudian_Dollar                                                  => self::Dollar,
            CurrencyAlpha3::Bolivar_Soberano                                                  => self::Bolivar_Soberano,
            CurrencyAlpha3::Boliviano                                                         => self::Boliviano,
            CurrencyAlpha3::Bond_Markets_Unit_European_Composite_Unit_EURCO                   => null,
            CurrencyAlpha3::Bond_Markets_Unit_European_Monetary_Unit_E_M_U_6                  => null,
            CurrencyAlpha3::Bond_Markets_Unit_European_Unit_of_Account_17_E_U_A_17            => null,
            CurrencyAlpha3::Bond_Markets_Unit_European_Unit_of_Account_9_E_U_A_9              => null,
            CurrencyAlpha3::Brazilian_Real                                                    => self::Brazilian_Real,
            CurrencyAlpha3::Brunei_Dollar                                                     => self::Brunei_Dollar,
            CurrencyAlpha3::Bulgarian_Lev                                                     => self::Bulgarian_Lev,
            CurrencyAlpha3::Burundi_Franc                                                     => self::Burundi_Franc,
            CurrencyAlpha3::CFA_Franc_BCEAO                                                   => null,
            CurrencyAlpha3::CFA_Franc_BEAC                                                    => null,
            CurrencyAlpha3::CFP_Franc                                                         => null,
            CurrencyAlpha3::Cabo_Verde_Escudo                                                 => self::Dollar,
            CurrencyAlpha3::Canadian_Dollar                                                   => self::Dollar,
            CurrencyAlpha3::Cayman_Islands_Dollar                                             => self::Dollar,
            CurrencyAlpha3::Chilean_Peso                                                      => self::Dollar,
            CurrencyAlpha3::Codes_specifically_reserved_for_testing_purposes                  => null,
            CurrencyAlpha3::Colombian_Peso                                                    => self::Dollar,
            CurrencyAlpha3::Comorian_Franc                                                    => self::Comorian_Franc,
            CurrencyAlpha3::Congolese_Franc                                                   => self::Congolose_Franc,
            CurrencyAlpha3::Convertible_Mark                                                  => self::Convertable_Mark,
            CurrencyAlpha3::Cordoba_Oro                                                       => self::Cordoba_Oro,
            CurrencyAlpha3::Costa_Rican_Colon                                                 => self::Costa_Rican_Colon,
            CurrencyAlpha3::Cuban_Peso                                                        => self::Dollar,
            CurrencyAlpha3::Czech_Koruna                                                      => self::Czech_Koruna,
            CurrencyAlpha3::Dalasi                                                            => self::Dalasi,
            CurrencyAlpha3::Danish_Krone                                                      => self::Danish_Krone,
            CurrencyAlpha3::Denar                                                             => self::Denar,
            CurrencyAlpha3::Djibouti_Franc                                                    => self::Djibouti_Franc,
            CurrencyAlpha3::Dobra                                                             => self::Dobra,
            CurrencyAlpha3::Dominican_Peso                                                    => self::Dollar,
            CurrencyAlpha3::Dong                                                              => self::Dong,
            CurrencyAlpha3::East_Caribbean_Dollar                                             => self::Dollar,
            CurrencyAlpha3::Egyptian_Pound                                                    => self::Egyptian_Pound,
            CurrencyAlpha3::El_Salvador_Colon                                                 => self::El_Salvador_Colon,
            CurrencyAlpha3::Ethiopian_Birr                                                    => self::Ethiopian_Birr,
            CurrencyAlpha3::Euro                                                              => self::Euro,
            CurrencyAlpha3::Falkland_Islands_Pound                                            => self::Pound,
            CurrencyAlpha3::Fiji_Dollar                                                       => self::Dollar,
            CurrencyAlpha3::Forint                                                            => self::Forint,
            CurrencyAlpha3::Ghana_Cedi                                                        => self::Ghana_Cedi,
            CurrencyAlpha3::Gibraltar_Pound                                                   => self::Pound,
            CurrencyAlpha3::Gold                                                              => null,
            CurrencyAlpha3::Gourde                                                            => self::Gourde,
            CurrencyAlpha3::Guarani                                                           => self::Guarani,
            CurrencyAlpha3::Guinean_Franc                                                     => self::Guinean_Franc,
            CurrencyAlpha3::Guyana_Dollar                                                     => self::Dollar,
            CurrencyAlpha3::Hong_Kong_Dollar                                                  => self::Dollar,
            CurrencyAlpha3::Hryvnia                                                           => self::Hryvnia,
            CurrencyAlpha3::Iceland_Krona                                                     => self::Iceland_Krona,
            CurrencyAlpha3::Indian_Rupee                                                      => self::Indian_Rupee,
            CurrencyAlpha3::Iranian_Rial                                                      => self::Iranian_Rial,
            CurrencyAlpha3::Iraqi_Dinar                                                       => self::Iraqi_Dinar,
            CurrencyAlpha3::Jamaican_Dollar                                                   => self::Dollar,
            CurrencyAlpha3::Jordanian_Dinar                                                   => self::Jordanian_Dinar,
            CurrencyAlpha3::Kenyan_Shilling                                                   => self::Kenyan_Shilling,
            CurrencyAlpha3::Kina                                                              => self::Kina,
            CurrencyAlpha3::Kuwaiti_Dinar                                                     => self::Kuwait_Dinar,
            CurrencyAlpha3::Kwanza                                                            => self::Kwanza,
            CurrencyAlpha3::Kyat                                                              => self::Kyat,
            CurrencyAlpha3::Lao_Kip                                                           => self::Lao_Kip,
            CurrencyAlpha3::Lari                                                              => self::Lari,
            CurrencyAlpha3::Lebanese_Pound                                                    => self::Lebanese_Pound,
            CurrencyAlpha3::Lek                                                               => self::L,
            CurrencyAlpha3::Lempira                                                           => self::L,
            CurrencyAlpha3::Leone                                                             => self::Le,
            CurrencyAlpha3::Liberian_Dollar                                                   => self::Dollar,
            CurrencyAlpha3::Libyan_Dinar                                                      => self::LD,
            CurrencyAlpha3::Lilangeni                                                         => self::L,
            CurrencyAlpha3::Loti                                                              => self::L,
            CurrencyAlpha3::Malagasy_Ariary                                                   => self::Malagasy_Ariary,
            CurrencyAlpha3::Malawi_Kwacha                                                     => self::Kina,
            CurrencyAlpha3::Malaysian_Ringgit                                                 => self::Malaysian_Ringgit,
            CurrencyAlpha3::Mauritius_Rupee                                                   => self::Mauritius_Rupee,
            CurrencyAlpha3::Mexican_Peso                                                      => self::Dollar,
            CurrencyAlpha3::Mexican_Unidad_de_Inversion_UDI                                   => null,
            CurrencyAlpha3::Moldovan_Leu                                                      => self::L,
            CurrencyAlpha3::Moroccan_Dirham                                                   => self::Moroccan_Dirham,
            CurrencyAlpha3::Mozambique_Metical                                                => self::Mozambique_Metical,
            CurrencyAlpha3::Mvdol                                                             => null,
            CurrencyAlpha3::Naira                                                             => self::Naira,
            CurrencyAlpha3::Nakfa                                                             => null,
            CurrencyAlpha3::Namibia_Dollar                                                    => self::Dollar,
            CurrencyAlpha3::Nepalese_Rupee                                                    => null,
            CurrencyAlpha3::Netherlands_Antillean_Guilder                                     => self::Netherlands_Antillean_Guilder,
            CurrencyAlpha3::New_Israeli_Sheqel                                                => self::New_Israeli_Sheqel,
            CurrencyAlpha3::New_Taiwan_Dollar                                                 => self::New_Taiwan_Dollar,
            CurrencyAlpha3::New_Zealand_Dollar                                                => self::Dollar,
            CurrencyAlpha3::Ngultrum                                                          => null,
            CurrencyAlpha3::North_Korean_Won                                                  => self::Won,
            CurrencyAlpha3::Norwegian_Krone                                                   => null,
            CurrencyAlpha3::Ouguiya                                                           => null,
            CurrencyAlpha3::Pa_anga                                                           => null,
            CurrencyAlpha3::Pakistan_Rupee                                                    => null,
            CurrencyAlpha3::Palladium                                                         => null,
            CurrencyAlpha3::Pataca                                                            => null,
            CurrencyAlpha3::Peso_Convertible                                                  => null,
            CurrencyAlpha3::Peso_Uruguayo                                                     => null,
            CurrencyAlpha3::Philippine_Peso                                                   => self::Philippine_Peso,
            CurrencyAlpha3::Platinum                                                          => null,
            CurrencyAlpha3::Pound_Sterling                                                    => self::Pound,
            CurrencyAlpha3::Pula                                                              => null,
            CurrencyAlpha3::Qatari_Rial                                                       => self::Qatari_Rial,
            CurrencyAlpha3::Quetzal                                                           => null,
            CurrencyAlpha3::Rand                                                              => null,
            CurrencyAlpha3::Rial_Omani                                                        => self::Rial_Omani,
            CurrencyAlpha3::Riel                                                              => self::Riel,
            CurrencyAlpha3::Romanian_Leu                                                      => null,
            CurrencyAlpha3::Rufiyaa                                                           => self::Rufiyaa,
            CurrencyAlpha3::Rupiah                                                            => null,
            CurrencyAlpha3::Russian_Ruble                                                     => self::Russian_Ruble,
            CurrencyAlpha3::Rwanda_Franc                                                      => null,
            CurrencyAlpha3::SDR_Special_Drawing_Right                                         => null,
            CurrencyAlpha3::Saint_Helena_Pound                                                => self::Pound,
            CurrencyAlpha3::Saudi_Riyal                                                       => self::Saudi_Riyal,
            CurrencyAlpha3::Serbian_Dinar                                                     => null,
            CurrencyAlpha3::Seychelles_Rupee                                                  => null,
            CurrencyAlpha3::Silver                                                            => null,
            CurrencyAlpha3::Singapore_Dollar                                                  => self::Dollar,
            CurrencyAlpha3::Sol                                                               => null,
            CurrencyAlpha3::Solomon_Islands_Dollar                                            => self::Dollar,
            CurrencyAlpha3::Som                                                               => null,
            CurrencyAlpha3::Somali_Shilling                                                   => null,
            CurrencyAlpha3::Somoni                                                            => null,
            CurrencyAlpha3::South_Sudanese_Pound                                              => self::Pound,
            CurrencyAlpha3::Sri_Lanka_Rupee                                                   => null,
            CurrencyAlpha3::Sucre                                                             => null,
            CurrencyAlpha3::Sudanese_Pound                                                    => null,
            CurrencyAlpha3::Surinam_Dollar                                                    => self::Dollar,
            CurrencyAlpha3::Swedish_Krona                                                     => null,
            CurrencyAlpha3::Swiss_Franc                                                       => null,
            CurrencyAlpha3::Syrian_Pound                                                      => null,
            CurrencyAlpha3::Taka                                                              => self::Taka,
            CurrencyAlpha3::Tala                                                              => null,
            CurrencyAlpha3::Tanzanian_Shilling                                                => null,
            CurrencyAlpha3::Tenge                                                             => self::Tenge,
            CurrencyAlpha3::The_codes_assigned_for_transactions_where_no_currency_is_involved => null,
            CurrencyAlpha3::Trinidad_and_Tobago_Dollar                                        => null,
            CurrencyAlpha3::Tugrik                                                            => null,
            CurrencyAlpha3::Tunisian_Dinar                                                    => null,
            CurrencyAlpha3::Turkish_Lira                                                      => self::Turkish_Lira,
            CurrencyAlpha3::Turkmenistan_New_Manat                                            => null,
            CurrencyAlpha3::UAE_Dirham                                                        => self::UAE_Dirham,
            CurrencyAlpha3::US_Dollar                                                         => self::Dollar,
            CurrencyAlpha3::US_Dollar_Next_day                                                => self::Dollar,
            CurrencyAlpha3::Uganda_Shilling                                                   => null,
            CurrencyAlpha3::Unidad_Previsional                                                => null,
            CurrencyAlpha3::Unidad_de_Fomento                                                 => null,
            CurrencyAlpha3::Unidad_de_Valor_Real                                              => null,
            CurrencyAlpha3::Uruguay_Peso_en_Unidades_Indexadas_UI                             => null,
            CurrencyAlpha3::Uzbekistan_Sum                                                    => null,
            CurrencyAlpha3::Vatu                                                              => null,
            CurrencyAlpha3::WIR_Euro                                                          => null,
            CurrencyAlpha3::WIR_Franc                                                         => null,
            CurrencyAlpha3::Won                                                               => self::Won,
            CurrencyAlpha3::Yemeni_Rial                                                       => self::Yemeni_Rial,
            CurrencyAlpha3::Yen                                                               => self::Yen,
            CurrencyAlpha3::Yuan_Renminbi                                                     => self::Yen,
            CurrencyAlpha3::Zambian_Kwacha                                                    => null,
            CurrencyAlpha3::Zimbabwe_Dollar                                                   => self::Dollar,
            CurrencyAlpha3::Zloty                                                             => null,
            CurrencyAlpha3::Kuna                                                              => null,
        };
    }
}
