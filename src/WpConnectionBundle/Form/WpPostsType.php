<?php

namespace WpConnectionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WpPostsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('postAuthor')->add('postDate')->add('postDateGmt')->add('postContent')->add('postTitle')->add('postExcerpt')->add('postStatus')->add('commentStatus')->add('pingStatus')->add('postPassword')->add('postName')->add('toPing')->add('pinged')->add('postModified')->add('postModifiedGmt')->add('postContentFiltered')->add('postParent')->add('guid')->add('menuOrder')->add('postType')->add('postMimeType')->add('commentCount')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WpConnectionBundle\Entity\WpPosts'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wpconnectionbundle_wpposts';
    }


}
