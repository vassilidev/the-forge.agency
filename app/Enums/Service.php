<?php

namespace App\Enums;

enum Service: string
{
    case WEB_DEVELOPMENT = 'Développement Web sur Mesure';
    case SCRAPING_AUTOMATION = 'Scraping & Automatisation';
    case DIGITAL_TRANSFORMATION = 'Transformation Digitale';
    case MAINTENANCE_SUPPORT = 'Maintenance & Support';
    case TECH_INCUBATOR = 'Incubateur Tech & Tech for Equity';
    case SITE_VITRINE = 'Site Vitrine';

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
            self::WEB_DEVELOPMENT => 'Création de sites web personnalisés répondant précisément à vos besoins.',
            self::SCRAPING_AUTOMATION => 'Optimisez vos processus avec nos solutions de scraping et d\'automatisation.',
            self::DIGITAL_TRANSFORMATION => 'Accompagnement sur mesure pour votre transition numérique.',
            self::MAINTENANCE_SUPPORT => 'Un support réactif et une maintenance continue pour vos applications.',
            self::TECH_INCUBATOR => 'Soutien aux startups innovantes via notre incubateur et des services de "Tech for Equity".',
            self::SITE_VITRINE => 'Lancez un site vitrine moderne, élégant et performant pour afficher votre entreprise en ligne.',
        };
    }
}
