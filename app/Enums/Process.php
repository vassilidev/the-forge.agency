<?php

namespace App\Enums;

enum Process: string
{
    case CONTACT = 'Prise de contact';
    case VALIDATION = 'Validation de concept';
    case DESIGN = 'Conception & Développement';
    case DELIVERY = 'Livraison';
    case OPTIMIZATION = 'Optimisation continue';

    public function icon(): string
    {
        return match ($this) {
            self::CONTACT => 'fas-handshake',
            self::VALIDATION => 'fas-lightbulb',
            self::DESIGN => 'fas-pencil-ruler',
            self::DELIVERY => 'fas-truck',
            self::OPTIMIZATION => 'fas-chart-line',
        };
    }

    public function title(): string
    {
        return match ($this) {
            self::CONTACT => 'Prise de contact',
            self::VALIDATION => 'Validation de concept',
            self::DESIGN => 'Conception & Développement',
            self::DELIVERY => 'Livraison',
            self::OPTIMIZATION => 'Optimisation continue',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::CONTACT => 'Échangez avec nous pour définir vos objectifs et poser les bases d’un projet réussi.',
            self::VALIDATION => 'Nous affinons les besoins et validons un concept adapté à vos attentes.',
            self::DESIGN => 'Nous concevons et développons une solution sur mesure avec une qualité irréprochable.',
            self::DELIVERY => 'Votre projet est livré clé en main avec une mise en production rapide et fiable.',
            self::OPTIMIZATION => 'Nous restons à vos côtés pour garantir des améliorations continues.',
        };
    }
}
