<?php

namespace WfMagConnectionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtykulType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idMagazynu')->add('idKategorii')->add('idCenyDom')->add('idJednostki')->add('idJednostkiZak')->add('idJednostkiSprz')->add('vatZakupu')->add('vatSprzedazy')->add('nazwa')->add('nazwaOryg')->add('nazwa2')->add('stan')->add('iloscEdytowana')->add('zamowiono')->add('doRezerwacji')->add('zarezerwowano')->add('odDostawcow')->add('doOdbiorcow')->add('indeksKatalogowy')->add('indKatTowarZast')->add('indeksHandlowy')->add('rodzaj')->add('plu')->add('swwku')->add('pkwiu')->add('kodKreskowy')->add('stanMinimalny')->add('stanMaksymalny')->add('certyfikat')->add('dataCertyfikatu')->add('nazwaCertyfikatu')->add('lokalizacja')->add('cenaZakupuBrutto')->add('cenaZakupuNetto')->add('dataZmCz')->add('opis')->add('ostrzezenie')->add('pokazujOstrzezenie')->add('semafor')->add('flagaStanu')->add('idArtykuluProd')->add('jednostkaProd')->add('przelicznikProd')->add('iloscProd')->add('uwagi')->add('krajPochodzenia')->add('waga')->add('jedWagi')->add('wymiarW')->add('wymiarS')->add('wymiarG')->add('jedWymiaru')->add('wyroznik')->add('cZakupuNettoWal')->add('cZakupuBruttoWal')->add('symWal')->add('pole1')->add('pole2')->add('pole3')->add('pole4')->add('pole5')->add('pole6')->add('pole7')->add('pole8')->add('pole9')->add('pole10')->add('guidArtykul')->add('podlegaRabatowaniu')->add('kodCn')->add('nazwaIntrastat')->add('idJednostkiRef')->add('promocjaOd')->add('promocjaDo')->add('cenaPromocjiN')->add('cenaPromocjiB')->add('promocjaProcent')->add('promocjaRabat')->add('zablokowany')->add('wylaczCenyInd')->add('aktCenPrzyDostawie')->add('producent')->add('idOpakowaniaRef')->add('cenaNKgo')->add('cenaBKgo')->add('jestZdjecie')->add('aktywnyDlaSysZew')->add('minNarzut')->add('wymuszajDostawy')->add('idFprom')->add('marzowy')->add('domyslnyVatZaGranica')->add('dostepnyWSklepieInter')->add('zasadaZdejmowaniaZeStanu')->add('idEtykiety')->add('akcyza')->add('akcyzaJm')->add('akcyzaPrzelicznik')->add('akcyzaStawkaZaJm')->add('odwrotny')->add('idProducenta')->add('idDostawcyPreferowanego')->add('dostepnyWAukcjach')->add('nazwaCala')->add('idKategoriiTree')->add('prgLojal')->add('prgIlosc')->add('akcyzaPrzelicznikJmJa')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WfMagConnectionBundle\Entity\Artykul'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wfmagconnectionbundle_artykul';
    }


}
