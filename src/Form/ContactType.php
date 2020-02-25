<?php


namespace App\Form;


use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
                ->add('firstname', TextType::class, [
                'attr' => ['placeholder' => ' Enter your firstname...']
                ])
                ->add('lastname', TextType::class, [
                    'attr' => ['placeholder' => ' Enter your lastname...']
                ])
                ->add('email', EmailType::class, [
                    'attr' => ['placeholder' => ' Enter your mail...']
                ])
                ->add('phone', TelType::class, [
                    'attr' => ['placeholder' => ' Enter your phone...']
                ])
                ->add('message', TextareaType::class, [
                    'attr' => [
                        'placeholder' => ' Enter your message...',
                        'rows' => 8
                    ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'translation_domain' => 'contact'
        ]);
    }
}