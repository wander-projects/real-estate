<?php

namespace OwnerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="OwnerBundle\Repository\ClientsRepository")
 */
class Clients
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Address", mappedBy="clients")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    protected $address;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id_profile", type="integer")
     */
    private $idProfile;

    /**
     * @var int
     *
     * @ORM\Column(name="type_client", type="integer")
     */
    private $typeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=15)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="identity", type="string", length=15, nullable=true)
     */
    private $identity;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=20)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var int
     *
     * @ORM\Column(name="id_maritalStates", type="integer")
     */
    private $idMaritalStates;

    /**
     * @var string
     *
     * @ORM\Column(name="cellphone", type="string", length=15)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="user_created", type="integer")
     */
    private $userCreated;

    /**
     * @var int
     *
     * @ORM\Column(name="user_updated", type="integer", nullable=true)
     */
    private $userUpdated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idProfile
     *
     * @param integer $idProfile
     * @return Post
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return integer 
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set typeClient
     *
     * @param integer $typeClient
     * @return Post
     */
    public function setTypeClient($typeClient)
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    /**
     * Get typeClient
     *
     * @return integer 
     */
    public function getTypeClient()
    {
        return $this->typeClient;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Post
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Post
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return Post
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set identity
     *
     * @param string $identity
     * @return Post
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Get identity
     *
     * @return string 
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Post
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Post
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set idMaritalStates
     *
     * @param integer $idMaritalStates
     * @return Post
     */
    public function setIdMaritalStates($idMaritalStates)
    {
        $this->idMaritalStates = $idMaritalStates;

        return $this;
    }

    /**
     * Get idMaritalStates
     *
     * @return integer 
     */
    public function getIdMaritalStates()
    {
        return $this->idMaritalStates;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     * @return Post
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string 
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Post
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set userCreated
     *
     * @param integer $userCreated
     * @return Post
     */
    public function setUserCreated($userCreated)
    {
        $this->userCreated = $userCreated;

        return $this;
    }

    /**
     * Get userCreated
     *
     * @return integer 
     */
    public function getUserCreated()
    {
        return $this->userCreated;
    }

    /**
     * Set userUpdated
     *
     * @param integer $userUpdated
     * @return Post
     */
    public function setUserUpdated($userUpdated)
    {
        $this->userUpdated = $userUpdated;

        return $this;
    }

    /**
     * Get userUpdated
     *
     * @return integer 
     */
    public function getUserUpdated()
    {
        return $this->userUpdated;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Post
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
