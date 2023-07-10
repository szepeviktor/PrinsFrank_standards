<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencySymbol
 */
class CurrencySymbolTest extends TestCase
{
    /**
     * @covers ::getSymbol
     */
    public function testAllAlpha3CasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->getSymbol();
            } catch (TypeError) {
                $this->fail(sprintf('Unable to retrieve symbol for %s', $case->name));
            }
        }
    }

    /**
     * @covers ::getSymbol
     */
    public function testAllNameCasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->getSymbol();
            } catch (TypeError) {
                $this->fail(sprintf('Unable to retrieve symbol for %s', $case->name));
            }
        }
    }

    /**
     * @covers ::getSymbol
     */
    public function testAllNumericCasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->getSymbol();
            } catch (TypeError) {
                $this->fail(sprintf('Unable to retrieve symbol for %s', $case->name));
            }
        }
    }
}
