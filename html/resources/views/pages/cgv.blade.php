@extends('layouts.app')

@section('content')
    
<section class="mainScreen">
    <img    srcset="{{ asset('images/content/contact_contactezNous.webp') }} 1920w,
                    {{ asset('images/content/contact_main_mobile.webp') }} 700w"
            src="{{ asset('images/content/contact_contactezNous.webp') }}"
            width="1600"
            height="580"
            alt=""
            title="" 
            class="mainScreen__img">
    <div class="mainScreen__filter"></div>

    <h1 class="mainScreen__h1">Conditions Générales de Vente</h1>
</section>

@include('/page_parts/breadcrumbs')

<section class="blogContent">
    <div class="container">
        <div class="blogContent__inner">
            <article class="blogContent__article">
                <h2 class="blogContent__h1">Article 1 : Principes généraux</h2>
                <p>Les présentes conditions générales de Vente et de Prestations associées, dénommées ci après « les conditions » ont vocation à régir toutes les ventes de produits et locations de produits, et toutes prestations associées aux ventes et locations effectuées par la société CARDIOPRO au capital de 8000€ ayant son siège social au 11 avenue Charles de Gaulle 95700 Roissy en France et immatriculé (demander les infos).</p>
                <p>Toute commande validée entraine obligatoirement l’acceptation sans réserve par le client des conditions en vigueur après les avoir lues, au jour de la commande concernée, à titre de condition essentielle et déterminante</p>
            </article>

            <div class="blogContent__article">
                <h3>Article 2 : Tarifs</h3>
                <p>Les produits vendus et loués par CARDIOPRO sont facturés en euros hors taxes (HT).  Le prix de vente et de location des produits est le prix en vigueur au moment de la commande enregistrée par CARDIOPRO, hors frais de livraison. La société CARDIOPRO s’autorise le droit de modifier les prix de vente à la date de son choix dans le respect des usages et réglementations en vigueur.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 3 : Condition de paiements</h3>
                <p>Pour toute achat ou location les règlements s’effectuent en ligne par les moyens décrit :  Cartes Bancaire (PayPal), Virement, Mandat Administratif pour les collectivités locales et territoriales et l’Administration.  Le fait de valider votre commande implique pour vous l'obligation de payer le prix indiqué. Pour tout paiement par carte bancaire, la redirection vers le centre de paiement sécurisé de notre partenaire financier.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 4 : Pénalités de retard</h3>
                <p>Conformément à l’application des lois du Code du commerce et cela depuis le 1er janvier 2013, tout montant versé après sa date d’exigibilité sans regard sur le motif du retard et quel que soit le mode de paiement consenti, donnera automatiquement lieu au paiement d’une pénalité de retard exigible sans la nécessité d’un rappel. Cette pénalité est applicable à compter de la date d’exigibilité, son montant sera calculé sur la base d’une fois et demie (1,5 fois) le taux de base bancaire. S’ajoute à cette pénalité de retard une indemnité forfaitaire pour frais de recouvrement dont le montant est fixé à 40 euros par facture payée après délais. Sur justification, une indemnisation complémentaire pourra être exiger si les frais de recouvrement exposés dépassent le montant de cette indemnité forfaitaire. En application du II de l’article L. 443-4 du Code de commerce, tout manquement à ces dispositions est passible d’une amende administrative d’un montant maximal de 75 000 € pour une personne physique et de 375 000 € pour une personne morale.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 5 : Disponibilité des produits</h3>
                <p>Les produits présentés par CARDIOPRO sont proposés dans la limite des stocks disponibles. En cas d’indisponibilité de produit après passation de la commande d’un client, ce dernier se verra automatiquement alertés dès la prise de commande par un message indiquant la date de livraison. CARDIOPRO s’engage à informer par mail le client après un retard supérieur à 30 jours ouvrés à compter de la date de la commande et propose l’annulation de cette dernière. </p>
            </div>
            <div class="blogContent__article">
                <h3>Article 6 : Expédition - Livraison - Frais de livraison</h3>
                <p>Concernant la livraison des produits, CARDIOPRO à le choix du prestataire. La livraison peut à titre exceptionnel être prédéfinie par le Service-Clients si le transit est aux risques et périls du destinataire.</p>
                <p>CARDI PRO s’efforce d’assurer les livraisons en France métropolitaine dans les 48 heures ouvrables suivant le paiement de la commande ( sous réserve d’une commande passée avant midi). Pour les DOM-TOM et la Corse, les délais de livraison peuvent être allongés.</p>
                <p>CARDIOPRO s’engage à tenir les délais de livraison stipulés au moment de la commande. Cependant, pour un retard de moins de 10 jours, la société n’acceptera aucune réclamation en dommages et intérêts et n'accepte de ce chef aucune annulation de commande.</p>
                <p>Les frais de livraisons vous sont offert par CARDIOPRO. Cependant, la société se réserve le droit de changer ses tarifs de livraison à la date de son choix dans le respect des usages et réglementations en vigueur.</p>
                <p>Pour la Corse, les DOM-TOM et toutes expéditions en-dehors de la France Métropolitaine, les frais de livraison applicables seront établis au cas par cas et mentionnés à la prise de commande.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 7 : Réclamations et responsabilité</h3>
                <p>Dès réception et installation du produit, le client en est responsable. Le client est tenu de contrôler à la livraison et à l’installation si le ou les produits satisfont au contrat. Si ce n’est pas le cas, ll doit en informer la Société CARDIOPRO au plus tard dans les 3 jours suivant l’installation. Le Client est dans l’obligation d’apporter la preuve de tout manquant ou casse. S’il est prouvé que le ou les produits ne satisfont pas au contrat, la Société CARDIOPRO s’engage à remplacer le ou les produits en question par de nouveaux produits en demandant que le ou les produits défectueux lui soient restitués.</p>
                <p>Le client a le devoir : </p>
                <ul>
                    <li>De faire en sorte de conserver le produit en bon état de fonctionnement ; </li>
                    <li>De placer le produit à l’abri de toute personne en cas de défaillance de celui – ci ; </li>
                    <li>D’utiliser le produit conformément au guide d’utilisation ZOLL et HEARTSINE ;</li>
                    <li>D’être disponible et s’en donner les moyens du mieux qui le pourra afin d’effectuer d’éventuelles vérifications techniques à distance du produit. (Par téléphone, courriel…) ;</li>
                    <li>De prévenir immédiatement la Société CARDIOPRO dans les 48 Heures de toutes défaillances du produit</li>
                    <li>De rendre par tous moyens accessible les locaux où se trouve le produit à la Société CARDIOPRO en cas d’intervention par celle – ci pour maintenance ou remplacement du produit. </li>
                </ul>
                <p>La société CARDIOPRO a l’obligation : </p>
                <ul>
                    <li>De changer le matériel après utilisation du DAE ; </li>
                    <li>De réaliser un contrôle annuel à distance avec le client du produit par la vérification de différents points de contrôle du produit ; </li>
                    <li>De changer le produit sous 72 Heures en cas de défaillance du produit une fois prévenu du dysfonctionnement par le client ;</li>
                    <li>D’informer le client des modifications éventuelles de la législation concernant le produit ; </li>
                    <li>D’informer le client d’éventuelles modifications d’utilisation du produit ; </li>
                    <li>De se rendre disponible afin de répondre aux éventuelles demandes du client.</li>
                </ul>
            </div>
            <div class="blogContent__article">
                <h3>Article 8 : Retours</h3>

                <h4>Article 8-1 conditions générales de retour pour les entreprises</h4>
                <p>Il n’existe pas de délai de rétractation pour les commandes effectuées sur internet par les entreprises. Les produits ne pourront être retournés qu’après accord préalable et écrit des équipes CARDIPRO, et ce dans un délai de 30 jours maximum suite à la livraison.  Avant ce délais, les produits devront alors  être retournés à CARDIOPRO en port payé à l’adresse suivante : 11 avenue Charles de Gaulle 95700 Roissy en France ou à l’adresse indiquée par le Service Clients dans un délai maximum de 7 jours suite à la notification de l’accord par le Service-Clients.</p>
                <p>Le client à le devoir de retourner les produits en parfait état et soigneusement emballés dans leur conditionnement d’origine, sans aucune modification de leurs références ou de leurs numéros de série. Sous réserve des conditions qui précédent, CARDIOPRO s’engage à rembourser le prix du ou des produits retournés par virement bancaire. Les frais de réexpédition resteront à la charge du Client.</p>

                <h4>Article 8-2 conditions de retour pour les particuliers</h4>
                <p>Les clients disposent d’un délai de 14 jours et cela à compter de la réception du produit pour notifier à CARDIOPRO l’exercice de leur droit de rétractation et s’engage à retourner le ou les produits à CARDIOPRO  port payé à l’adresse suivante : 11 avenue Charles de Gaulle 95700 Roissy en France ou à l’adresse indiquée par le Service Clients dans un délai maximum de 14. jours suite à la notification de l</p>
                <p>Le client à le devoir de retourner les produits en parfait état et soigneusement emballés dans leur conditionnement d’origine, sans aucune modification de leurs références ou de leurs numéros de série. Sous réserve des conditions qui précédent, CARDIOPRO s’engage à rembourser le prix du ou des produits retournés par virement bancaire. Les frais de réexpédition resteront à la charge du Client.</p>

            </div>
            <div class="blogContent__article">
                <h3>Article 9: Garanties et Support- Clients</h3>
                <p>Pour tout achat sur CARDIOPRO, les défibrillateurs sont soumis à garantis durant une période de 5 ans par le constructeur selon les Conditions Générales de Garanties téléchargeable sur le site internet. Cette garanties est sans préjudice  toutefois de la garantie légale des vices cachés telle que prévue par les articles 1641 à 1649 du code civil prévoyant notamment que « le vendeur est tenu de la garantie à raison des défauts cachés de la chose vendue qui la rendent impropre à l’usage auquel on la destine, ou qui diminuent tellement cet usage que l’acheteur ne l’aurait pas acquise, ou n’en aurait donné qu’un moindre prix, s’il les avait connus » et de la garantie légale de conformité prévue par les articles L.211-4, L.211-5 et L.211-12 du code de la consommation prévoyant notamment que « le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Pour être conforme au contrat, le bien doit être propre à l’usage habituellement attendu d’un bien semblable. L’action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien ». Si il est prouvé que le produit ou les produits sont déféctueux, le client est alors autorisé à à retourner son défibrillateur dans le cadre de la garantie. Cardio pro s’engage alors à remplacer gratuitement le ou les produits par un ou des produits équivalents et cela sous 48h jours ouvrés en France Métropolitaine ( hors Corse et DOM-TOM).</p>
                <p>Les produits sont garantis pour une durée de 60 mois à compter de la signature du bordereau de remise du matériel.</p>
                <p>Tout produit présentant un dysfonctionnement sera échangé après que le client ait signalé le dysfonctionnement au Service Après-Vente de la Société CARDIOPRO. Cette garantie ne sera accordée que sur présentation du produit défectueux accompagné de la facture d’origine.</p>
                <p>La Société CARDIOPRO se réserve le droit de refuser un service de garantie gratuit si les informations/ documents ci-dessus ne sont pas présentés ou si les informations contenues sont incomplètes ou illisibles.</p>
                <p>La garantie ne rembourse et ne couvre pas les dommages résultant d’adaptations ou de réglages apportés au produit, sans l’autorisation préalable écrite de la Société CARDIOPRO afin de le rendre conforme aux normes de sécurité/ techniques nationales ou locales en vigueur.</p>
                <p>La garantie ne couvre pas les points suivants :</p>
                <ul>
                    <li>Toutes les adaptations ou modifications destinées à améliorer le produit par rapport à son utilisation normale décrite dans les Instructions d’utilisation, sans l’autorisation préalable écrite de la Société CARDIOPRO ;</li>
                    <li>Les dommages résultants :</li>
                    <li>D’une mauvaise utilisation, y compris mais sans se limiter à L’incapacité d’utiliser le produit pour son utilisation prévue ou en accord avec les instructions de la Société CARDIOPRO sur l’utilisation et l’entretien adaptés.</li>
                </ul>
                <p>L’installation ou l’utilisation du produit en désaccord avec les normes techniques ou de sécurité en vigueur,</p>
                <p>Une installation impropre ou incorrecte du produit,</p>
                <ul>
                    <li>Les accidents, la foudre, l’eau, le feu, une mauvaise ventilation ou toute cause hors de contrôle de la Société CARDIOPRO,</li>
                    <li>Les réparations effectuées par des Services après-vente ou des Revendeurs non-agréés, ou par le client lui-même,</li>
                </ul>
                <p>La garantie sera accordée sous réserve du respect des engagements stipulées dans les présentes conditions générales de vente, à défaut le client ne bénéficiera pas de la garantie. Un devis pour réparation du produit sera établi après diagnostic de celui – ci et en cas de remplacement de celui – ci, il sera alors facturé au client au prix du marché. Un technicien interviendra sur le site où se trouve le produit du Lundi au Vendredi de 09 h 00 à 17 h 00.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 10 : Assurance</h3>
                <p>Afin de couvrir tout risques de perte, vol et autres dommages durant le transit dont les produits pourraient faire l’objet, chaque partie s’engage à prendre ses dispositions pour couvrir ces désagréments auprès de sa propre compagnie d’assurance.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 11 : Limite de réclamation et responsabilité</h3>
                <p>Dès réception et installation du produit, le client en est responsable. Le client tenu de contrôler à la livraison et à l’installation si le ou les produits satisfont au contrat. CARDIOPRO ne s’engage à aucune responsabilité en cas de pertes, de dommages qu’ils soient directs ou indirects, peu importe la cause. Pour les raisons présentées, le client ne peut en aucun cas prétendre à un retenu sur le montant des factures.</p>
                <p>Si à la réception des ou du produit le client n’est pas satisfait, il doit en informer la Société CARDIOPRO au plus tard dans les 3 jours suivant l’installation. S’il est prouvé que le ou les produits ne satisfont pas au contrat, la Société CARDIOPRO remplacera le ou les produits en question par de nouveaux produits en demandant que le ou les produits défectueux lui restitués.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 12 : Réserve de propriété</h3>
                <p>Pour toute location, le client acceptant les présentes conditions générales s’engage à ce que le ou les produits puissent faire l’objet d’un contrat de location du matériel à usage personnel et dans ses locaux. Le client n’est pas propriétaire du produit. Il ne peut ni le louer ni le vendre.</p>
                <p>La société CARDIOPRO se réserve le droit d’annuler toute livraison ou toute présentation peu importe la nature de cette dernière dans les cas suivants : arriéré de facture ou d’insolvabilité.</p>
                <p>Dès lors qu’elles sont présentées dans les locaux du client, les marchandises sont présumées sous réserve de propriété à défaut de la preuve de leur paiement complet.</p>
                <p>Durant l’ensemble de la durée de la réserve de propriété, les risques ayant été communiqués à la livraison, le Client reste responsable des dommages subi ou causé au matériel, sauf à s’assurer.</p>
                <p>Le Client est sommé d’informer dans les plus brefs délais CARDIOPRO de la saisie au profit d’un tiers des matériels livrés sous réserve de propriété.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 13 : Clause résolutoire de vente</h3>
                <p>En cas de défaut de paiement d’une livraison à son échéance et de dispositions particulières consenties à la commande, la vente sera résiliée de plein droit par le vendeur et ce huit jours après une mise en demeure signifiée par CARDIOPRO. La société demandera alors la restitution des produits considérés sans préjudice de tous autres dommages et intérêts, sans délai et aux frais et risques du Client.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 14 : Déchéance du terme</h3>
                <p>En outre, tout défaut de paiement d’une somme quelconque à son échéance entraînera l’exigibilité immédiate de toutes les sommes dues par le Client et non échues.</p>
            </div>
            <div class="blogContent__article">
                <h3>Article 15 : Loi Applicable et attribution de juridiction</h3>
                <p>Pour tout litige en relation d’une commande et/ou à l’interprétation des présentes conditions générales, après la tentative d’un règlement amiable, si cette tentative de règlement amiable d’aboutit pas tous litiges pouvant survenir entre la Société CARDIOPRO et ses clients seront de la compétence exclusive du tribunal de Pontoise et la loi applicable sera la loi française.</p>
            </div>
        </div>
    </div>
</section>

@endsection