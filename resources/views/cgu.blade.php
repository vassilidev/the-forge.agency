@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-extrabold mb-8 text-[#ff79c6]">Mentions légales</h1>

        <section class="space-y-6 text-gray-300">
            <div>
                <h2 class="text-2xl font-semibold">1. Présentation du site</h2>
                <p class="mt-2">
                    Le présent site Internet est la propriété de :
                </p>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li><strong>Raison sociale</strong> : TFA THE FORGE AGENCY SAS</li>
                    <li><strong>Capital social</strong> : 1 000 €</li>
                    <li><strong>Siège social</strong> : 1 Rue de Stockholm, 75008 Paris</li>
                    <li><strong>SIREN</strong> : 984 379 503 – <strong>SIRET (siège)</strong> : 984 379 503 00019</li>
                    <li><strong>Numéro de TVA intracom.</strong> : FR02 984 379 503</li>
                    <li><strong>Forme juridique</strong> : SAS</li>
                    <li><strong>Immatriculation au RCS</strong> : Paris, le 09/02/2024 (RCS 984 379 503 R.C.S. Paris)</li>
                    <li><strong>Dirigeant de la publication</strong> : Monsieur Joffroy Vassili, Président</li>
                    <li><strong>Webmaster</strong> : THE FORGE AGENCY</li>
                    <li><strong>Hébergeur</strong> : DigitalOcean, filiale européenne – Amsterdam, Pays-Bas</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">2. Conditions générales d’utilisation</h2>
                <p class="mt-2">
                    L’accès et l’utilisation du site <a href="http://www.the-forge.agency" class="text-[#ff79c6] hover:underline">www.the-forge.agency</a> (ci-après le « Site ») sont soumis aux présentes conditions générales d’utilisation. Toute personne se connectant au Site reconnaît en avoir pris connaissance et accepter sans réserve les présentes dispositions. THE FORGE AGENCY se réserve le droit de modifier, à tout moment et sans préavis, le contenu du Site ainsi que ces conditions.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">3. Description des services fournis</h2>
                <p class="mt-2">
                    Le Site a pour objet de présenter l’activité de THE FORGE AGENCY, spécialisée dans la programmation informatique, le conseil et le développement de sites web, logiciels et systèmes digitaux, ainsi que la formation en informatique. Les informations diffusées sont indicatives et susceptibles d’évoluer.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">4. Hébergement</h2>
                <p class="mt-2">
                    Le Site est hébergé par DigitalOcean, filiale européenne, sise à Amsterdam, Pays-Bas. THE FORGE AGENCY ne saurait être tenu responsable en cas de défaillance ou d’indisponibilité de l’hébergeur.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">5. Propriété intellectuelle</h2>
                <p class="mt-2">
                    Tous les contenus présents sur le Site (textes, images, vidéos, logos, icônes, etc.) sont la propriété de THE FORGE AGENCY ou de ses partenaires et sont protégés par le Code de la propriété intellectuelle. Toute reproduction ou représentation totale ou partielle de ces contenus sans autorisation expresse est strictement interdite.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">6. Limitations de responsabilité</h2>
                <p class="mt-2">
                    THE FORGE AGENCY met tout en œuvre pour assurer l’exactitude et la mise à jour des informations diffusées sur le Site, sans toutefois garantir leur exhaustivité ou leur actualité. En conséquence, l’utilisateur reconnaît utiliser ces informations sous sa seule et entière responsabilité. THE FORGE AGENCY ne saurait être tenue pour responsable des dommages directs ou indirects découlant de l’accès ou de l’impossibilité d’accéder au Site, ou de l’utilisation de ces informations.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">7. Gestion des données personnelles</h2>
                <p class="mt-2">
                    Aucune donnée à caractère personnel n’est collectée automatiquement lors de la simple navigation sur le Site. Pour toute demande de contact ou formulaire volontaire, seules les données strictement nécessaires seront collectées, stockées et traitées conformément au RGPD.
                </p>
                <p class="mt-2">
                    Vous disposez d’un droit d’accès, de rectification, d’effacement, de limitation et de portabilité de vos données en adressant votre demande à :
                </p>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li>par email : <a href="mailto:vassili@the-forge.agency" class="text-[#ff79c6] hover:underline">vassili@the-forge.agency</a></li>
                    <li>par courrier : THE FORGE AGENCY – 1 Rue de Stockholm – 75008 Paris</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">8. Cookies et traceurs</h2>
                <p class="mt-2">
                    Le Site utilise des cookies et traceurs à des fins de mesure d’audience. Vous pouvez configurer votre navigateur pour refuser ces cookies ou être informé de leur dépôt.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">9. Liens hypertextes</h2>
                <p class="mt-2">
                    Des liens hypertextes peuvent renvoyer vers des sites tiers. THE FORGE AGENCY n’exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">10. Droit applicable et juridiction</h2>
                <p class="mt-2">
                    Les présentes mentions légales sont soumises au droit français. Tout litige relatif à leur interprétation ou à leur exécution sera de la compétence exclusive des tribunaux du ressort de la Cour d’appel de Paris.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">11. Principales lois concernées</h2>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li>Loi n° 78-17 du 6 janvier 1978 modifiée relative à l’informatique, aux fichiers et aux libertés</li>
                    <li>Règlement (UE) 2016/679 du 27 avril 2016 (RGPD)</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">12. Droits des utilisateurs</h2>
                <p class="mt-2">
                    Conformément au RGPD, vous disposez du droit de :
                </p>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li>savoir si des données vous concernant sont traitées et d’y accéder,</li>
                    <li>obtenir la rectification, l’effacement ou la limitation du traitement de vos données,</li>
                    <li>porter vos données dans un format structuré et couramment utilisé,</li>
                    <li>vous opposer au traitement pour motifs légitimes ou pour prospection.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold">13. Lexique</h2>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li><strong>Utilisateur</strong> : toute personne naviguant sur le Site.</li>
                    <li><strong>Donnée personnelle</strong> : information permettant d’identifier directement ou indirectement une personne physique.</li>
                </ul>
            </div>

            <p class="mt-12 text-gray-500 italic">Dernière mise à jour : 19 juin 2025</p>
        </section>
    </main>
@endsection
