<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 * @UniqueEntity(
 *     fields={"email"},
 *     message= "Cette Adresse email est déja utilisée"
 * )
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="4", minMessage="Mot de passe doit etre supérieur à 8 caractères")
     */
    private $hash;

    /**
     * @Assert\EqualTo(propertyPath="hash", message="les mots de passe doivent etre identique")
     */
    public $confirm_password;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Role", mappedBy="utilisateur")
     */
    private $RoleUtilisateur;

    public function __construct()
    {
        $this->RoleUtilisateur = new ArrayCollection();
    }


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
        return $this->hash;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return Collection|Role[]
     */
    public function getRoleUtilisateur(): Collection
    {
        return $this->RoleUtilisateur;
    }

    public function addRoleUtilisateur(Role $roleUtilisateur): self
    {
        if (!$this->RoleUtilisateur->contains($roleUtilisateur)) {
            $this->RoleUtilisateur[] = $roleUtilisateur;
            $roleUtilisateur->addUtilisateur($this);
        }

        return $this;
    }

    public function removeRoleUtilisateur(Role $roleUtilisateur): self
    {
        if ($this->RoleUtilisateur->contains($roleUtilisateur)) {
            $this->RoleUtilisateur->removeElement($roleUtilisateur);
            $roleUtilisateur->removeUtilisateur($this);
        }

        return $this;
    }


}
