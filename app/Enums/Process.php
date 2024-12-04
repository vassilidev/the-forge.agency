<?php

namespace App\Enums;

enum Process: string
{
    case CONTACT = 'Prise de contact';
    case DESIGN = 'Conception & Développement';
    case DELIVERY = 'Livraison & Assistance';

    public function icon(): string
    {
        return match ($this) {
            self::CONTACT => 'fas-handshake',
            self::DESIGN => 'fas-pencil-ruler',
            self::DELIVERY => 'fas-truck',
        };
    }

    public function title(): string
    {
        return match ($this) {
            self::CONTACT => 'Prise de contact',
            self::DESIGN => 'Conception & Développement',
            self::DELIVERY => 'Livraison & Assistance',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::CONTACT => 'Discutons de vos besoins et des objectifs pour démarrer votre projet.',
            self::DESIGN => 'Nous concevons et développons votre solution avec des standards de qualité élevés.',
            self::DELIVERY => 'Livraison rapide et support continu pour assurer votre satisfaction.',
        };
    }
}
