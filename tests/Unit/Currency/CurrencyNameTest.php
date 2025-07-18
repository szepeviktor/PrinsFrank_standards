<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

#[CoversClass(CurrencyName::class)]
class CurrencyNameTest extends TestCase {
    public function testAllCasesCanBeConvertedToCurrencyNumeric(): void {
        foreach (CurrencyName::cases() as $case) {
            $case->toCurrencyNumeric();
        }
    }

    public function testAllCasesHaveAccessToSymbolOrNull(): void {
        foreach (CurrencyName::cases() as $case) {
            $case->getSymbol();
        }
    }

    public function testAllCasesCanBeConvertedToCurrencyAlpha3(): void {
        foreach (CurrencyName::cases() as $case) {
            $case->toCurrencyAlpha3();
        }
    }

    public function testGetMinorUnits(): void {
        foreach (CurrencyName::cases() as $currencyAlpha3) {
            $currencyAlpha3->getMinorUnits();
        }
    }

    public function testGetCountriesAlpha2(): void {
        foreach (CurrencyName::cases() as $currencyAlpha3) {
            $currencyAlpha3->getCountriesAlpha2();
        }
    }

    public function testGetCurrencyMinorLowerLastAlpha3(): void {
        foreach (CurrencyName::cases() as $case) {
            $case->getCurrencyMinorLowerLastAlpha3();
        }
    }

    public function testGetCurrencyMinorUpperXAlpha3(): void {
        foreach (CurrencyName::cases() as $case) {
            $case->getCurrencyMinorUpperXAlpha3();
        }
    }

    public function testFormat(): void {
        static::assertSame('€ 42,42', CurrencyName::Euro->format(42.42, LanguageAlpha2::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyName::Euro->format(42.42, LanguageAlpha3Bibliographic::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyName::Euro->format(42.42, LanguageAlpha3Terminology::Dutch_Flemish, CountryAlpha2::Netherlands));

        static::assertSame('€42.42', CurrencyName::Euro->format(42.42, LanguageAlpha2::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyName::Euro->format(42.42, LanguageAlpha3Bibliographic::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyName::Euro->format(42.42, LanguageAlpha3Terminology::English, CountryAlpha2::Netherlands));
    }
}
