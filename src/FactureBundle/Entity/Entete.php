<?php

namespace FactureBundle\Entity ;

use Doctrine\ORM\Mapping as ORM ;

/**
 * Entete
 *
 * @ORM\Table(name="comm_entete")
 * @ORM\Entity
 */
class Entete
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id ;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=20,nullable=true)
     */
    private $reference ;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation ;

    /**
     * @var integer
     *
     * @ORM\Column(name="client", type="integer")
     */
    private $client ;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=50)
     */
    private $nomClient ;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseClient", type="string", length=255,nullable=true)
     */
    private $adresseClient ;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculeFiscale", type="string", length=255,nullable=true)
     */
    private $matriculeFiscale ;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255,nullable=true)
     */
    private $tel ;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255,nullable=true)
     */
    private $email ;

    /**
     * @var string
     *
     * @ORM\Column(name="mntFraisTaxable", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $mntFraisTaxable ;

    /**
     * @var string
     *
     * @ORM\Column(name="mntFraisNonTaxable", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $mntFraisNonTaxable ;

    /**
     * @var string
     *
     * @ORM\Column(name="totalTva", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $totalTva ;

    /**
     * @var string
     *
     * @ORM\Column(name="timbre", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $timbre ;

    /**
     * @var string
     *
     * @ORM\Column(name="totalRemise", type="decimal", precision=11, scale=3,nullable=true, nullable=true)
     */
    private $totalRemise ;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat ;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note ;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="factures")
     * @ORM\JoinColumn(name="suiviPar", referencedColumnName="id")
     */
    protected $suiviPar ;

    /**
     * @ORM\OneToMany(targetEntity="Ligne", mappedBy="entete")
     */
    protected $lignes ;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id ;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Entete
     */
    public function setReference($reference)
    {
        $this->reference = $reference ;

        return $this ;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference ;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Entete
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation ;

        return $this ;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation ;
    }

    /**
     * Set client
     *
     * @param integer $client
     * @return Entete
     */
    public function setClient($client)
    {
        $this->client = $client ;

        return $this ;
    }

    /**
     * Get client
     *
     * @return integer 
     */
    public function getClient()
    {
        return $this->client ;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     * @return Entete
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient ;

        return $this ;
    }

    /**
     * Get nomClient
     *
     * @return string 
     */
    public function getNomClient()
    {
        return $this->nomClient ;
    }

    /**
     * Set adresseClient
     *
     * @param string $adresseClient
     * @return Entete
     */
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient ;

        return $this ;
    }

    /**
     * Get adresseClient
     *
     * @return string 
     */
    public function getAdresseClient()
    {
        return $this->adresseClient ;
    }

    /**
     * Set matriculeFiscale
     *
     * @param string $matriculeFiscale
     * @return Entete
     */
    public function setMatriculeFiscale($matriculeFiscale)
    {
        $this->matriculeFiscale = $matriculeFiscale ;

        return $this ;
    }

    /**
     * Get matriculeFiscale
     *
     * @return string 
     */
    public function getMatriculeFiscale()
    {
        return $this->matriculeFiscale ;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Entete
     */
    public function setTel($tel)
    {
        $this->tel = $tel ;

        return $this ;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel ;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Entete
     */
    public function setEmail($email)
    {
        $this->email = $email ;

        return $this ;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email ;
    }

    /**
     * Set mntFraisTaxable
     *
     * @param string $mntFraisTaxable
     * @return Entete
     */
    public function setMntFraisTaxable($mntFraisTaxable)
    {
        $this->mntFraisTaxable = $mntFraisTaxable ;

        return $this ;
    }

    /**
     * Get mntFraisTaxable
     *
     * @return string 
     */
    public function getMntFraisTaxable()
    {
        return $this->mntFraisTaxable ;
    }

    /**
     * Set mntFraisNonTaxable
     *
     * @param string $mntFraisNonTaxable
     * @return Entete
     */
    public function setMntFraisNonTaxable($mntFraisNonTaxable)
    {
        $this->mntFraisNonTaxable = $mntFraisNonTaxable ;

        return $this ;
    }

    /**
     * Get mntFraisNonTaxable
     *
     * @return string 
     */
    public function getMntFraisNonTaxable()
    {
        return $this->mntFraisNonTaxable ;
    }

    /**
     * Set totalTva
     *
     * @param string $totalTva
     * @return Entete
     */
    public function setTotalTva($totalTva)
    {
        $this->totalTva = $totalTva ;

        return $this ;
    }

    /**
     * Get totalTva
     *
     * @return string 
     */
    public function getTotalTva()
    {
        return $this->totalTva ;
    }

    /**
     * Set timbre
     *
     * @param string $timbre
     * @return Entete
     */
    public function setTimbre($timbre)
    {
        $this->timbre = $timbre ;

        return $this ;
    }

    /**
     * Get timbre
     *
     * @return string 
     */
    public function getTimbre()
    {
        return $this->timbre ;
    }

    /**
     * Set totalRemise
     *
     * @param string $totalRemise
     * @return Entete
     */
    public function setTotalRemise($totalRemise)
    {
        $this->totalRemise = $totalRemise ;

        return $this ;
    }

    /**
     * Get totalRemise
     *
     * @return string 
     */
    public function getTotalRemise()
    {
        return $this->totalRemise ;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Entete
     */
    public function setNote($note)
    {
        $this->note = $note ;

        return $this ;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note ;
    }

    /**
     * Set suiviPar
     *
     * @param \UserBundle\Entity\User $suiviPar
     * @return Entete
     */
    public function setSuiviPar(\UserBundle\Entity\User $suiviPar = null)
    {
        $this->suiviPar = $suiviPar ;

        return $this ;
    }

    /**
     * Get suiviPar
     *
     * @return \UserBundle\Entity\User 
     */
    public function getSuiviPar()
    {
        return $this->suiviPar ;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Entete
     */
    public function setEtat($etat)
    {
        $this->etat = $etat ;

        return $this ;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat ;
    }

    public function showEtat()
    {
        if ($this->etat == 1)
            return "Brouillon" ;
        if ($this->etat == 2)
            return "Validée" ;
        if ($this->etat == 9)
            return "Annulée" ;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lignes = new \Doctrine\Common\Collections\ArrayCollection() ;
    }

    /**
     * Add lignes
     *
     * @param \FactureBundle\Entity\Ligne $lignes
     * @return Entete
     */
    public function addLigne(\FactureBundle\Entity\Ligne $lignes)
    {
        $this->lignes[] = $lignes ;

        return $this ;
    }

    /**
     * Remove lignes
     *
     * @param \FactureBundle\Entity\Ligne $lignes
     */
    public function removeLigne(\FactureBundle\Entity\Ligne $lignes)
    {
        $this->lignes->removeElement($lignes) ;
    }

    /**
     * Get lignes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLignes()
    {
        return $this->lignes ;
    }

    public function update()
    {
        $mntFraisTaxable = 0 ;
        $mntFraisNonTaxable = 0 ;
        $Tva = 0 ;
        $Remise = 0 ;

        foreach ($this->lignes as $ligne)
        {
            $mntFraisTaxable+=$ligne->getMontantTaxable() ;
            $mntFraisNonTaxable+=$ligne->getMontantNonTaxable() ;
            $Tva+=$ligne->getMntTva() ;
            $Remise+=$ligne->getMontantRemise() ;
        }

        $this->mntFraisTaxable = $mntFraisTaxable ;
        $this->mntFraisNonTaxable = $mntFraisNonTaxable ;
        $this->totalTva = $Tva ;
        $this->totalRemise = $Remise ;
    }

    public function getTotal()
    {
        return $this->mntFraisNonTaxable +
                $this->mntFraisTaxable +
                $this->timbre 
//                +(-$this->totalRemise) 
                ;
    }

}
