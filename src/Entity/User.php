<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(
 *     fields={"email"},
 *     errorPath="email",
 *     message="Ce compte existe déja"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Length(max="180", maxMessage="Attention pas plus de 180 caractères.")
     * @Assert\Email(message="L'adresse email '{{ value }}' n'est pas valide.")
     * @Assert\NotBlank (message="N'oubliez pas votre email")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\NotBlank (message="Noubliez pas votre mot de passe")
     * @Assert\NotCompromisedPassword(message="Attention votre mot de passe n'est pas sécuriser")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\NotBlank (message="Veuillez inscrire votre nom.")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\NotBlank(message="Veuillez inscrire votre prénom.")
     * @Assert\Length(max="80", maxMessage="Attention pas plus de 80 caractères.")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message="Veuillez inscrire une adresse.")
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\Length(min="5", max="5", maxMessage="Attention pas plus de 5 caractères.")
     * @Assert\Regex(pattern="/^[0-9]{5}$/", message="Veuillez inscrire votre code Postale ex:78250")
     * @Assert\NotBlank (message="Veuillez entrer votre code postale.")
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank (message="Veuillez entrer votre ville.")
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\Regex(pattern="/^(0)[0-9]{9}$/", message="Veuillez inscrire votre numero de téléphone ex:0102030405")
     */
    private $tel;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Veuillez entrer la raison de votre inscription.")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

// GENERER UN LIEN PDF

//    /**
//     * @ORM\Column(type="string")
//     */
//    private $brochureFilename;
//
//    public function getBrochureFilename()
//    {
//        return $this->brochureFilename;
//    }
//
//    public function setBrochureFilename($brochureFilename): User
//    {
//        $this->brochureFilename = $brochureFilename;
//
//        return $this;
//    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

}
