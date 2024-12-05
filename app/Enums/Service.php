<?php

namespace App\Enums;

enum Service: string
{
    case WEB_DEVELOPMENT = 'Développement Web sur Mesure';
    case DIGITAL_TRANSFORMATION = 'Transformation Digitale';
    case TECH_INCUBATOR = 'Tech for Equity';
    case SITE_VITRINE = 'Site Vitrine';
    case SCRAPING_AUTOMATION = 'Scraping & Automatisation';
    case MAINTENANCE_SUPPORT = 'Maintenance & Support';

    public function icon(): string
    {
        return match ($this) {
            self::WEB_DEVELOPMENT => 'fas-code',
            self::SCRAPING_AUTOMATION => 'fas-database',
            self::DIGITAL_TRANSFORMATION => 'fas-sync-alt',
            self::MAINTENANCE_SUPPORT => 'fas-tools',
            self::TECH_INCUBATOR => 'fas-lightbulb',
            self::SITE_VITRINE => 'fas-globe',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::WEB_DEVELOPMENT => 'Nous concevons des sites web uniques, performants et parfaitement adaptés à vos besoins spécifiques.',
            self::SCRAPING_AUTOMATION => 'Exploitez vos données et automatisez vos processus grâce à nos solutions sur mesure.',
            self::DIGITAL_TRANSFORMATION => 'Transformez votre entreprise avec notre expertise en transition digitale stratégique.',
            self::MAINTENANCE_SUPPORT => 'Profitez d’un support réactif et d’une maintenance proactive pour assurer la pérennité de vos applications.',
            self::TECH_INCUBATOR => 'Nous accompagnons les startups avec un soutien stratégique et des services innovants en "Tech for Equity".',
            self::SITE_VITRINE => 'Nous créons des sites vitrines élégants, performants et entièrement personnalisés pour booster votre visibilité en ligne.',
        };
    }
}
