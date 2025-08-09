<?php



namespace App\Form;
use App\Entity\User;
use App\Entity\Operation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AjoutOperationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    { 

    
        $builder
           
            ->add('type', ChoiceType::class, [
                'choices'=>[
                    'Grosse'=>'Grosse',
                    'Moyenne'=>'Moyenne',
                    'Petite manoeuvre'=>'Petite manoeuvre',
                    
                ],
                'multiple'=>false,
                'expanded'=>false,
            ])
            ->add('prix', MoneyType::class, [
                'label' => 'Prix',
                
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Saisir votre nom']
            ])
       
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'constraints' => [new Length(['min'=> 4, 'max'=> 20])],
                'attr' => ['placeholder' => 'Saisir votre prénom']
            ])

            ->add('description', TextareaType::class, [
                'attr' => ['rows' => 6],
            ])


            ->add('image', FileType::class, [
                'label'=> 'Ajouter une image',
                'required'   => true,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Le fichier n\'est pas valide, assurez vous d\'avoir un fichier au format JPG, JPEG)',
                    ]),
                ]
            ])
           
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'nom',
            // ])
            ->add('is_Active', HiddenType::class, [
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Operation::class,
        ]);
 
      }

      
}

?>
