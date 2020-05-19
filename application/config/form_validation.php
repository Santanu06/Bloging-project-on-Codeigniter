<?php 
$config = ['reg_validation'=>[
                               ['field'=>'user_name',
                                'label'=>'User Name',
                                'rules'=>'trim|required'
                               ],
                               [
                                'field'=>'email_id',
                                'label'=>'Email Id',
                                'rules'=>'trim|required|is_unique[user.email_id]',['is_unique'=>'Email id already Exit','valid_email'=>'Please input valid Email id']
                               ],
                               [
                                'field'=>'password',
                                'label'=>'Password',
                                'rules'=>'trim|required'
                               ]
                              ],  
      'userlogin_validation'=>[
                                [
                                  'field'=>'email_id',
                                  'label'=>'Email Id',
                                  'rules'=>'trim|required'
                                ],
                                [
                                  'field'=>'password',
                                  'label'=>'Password',
                                  'rules'=>'trim|required'
                                ]
                                ],
      'article_validation'=>[
                             [
                               'field'=>'article_title',
                               'label'=>'Article Title',
                               'rules'=>'trim|required'
                             ],
                             [
                              'field'=>'article_body',
                              'label'=>'Article Body',
                              'rules'=>'trim|required'
                             ],
                             [
                              'field'=>'article_image',
                              'label'=>'Upload Image',
                              'rules'=>'requieed'
                             ]
                             ],
  'update_article_validation'=>[
                                [
                                  [
                                    'field'=>'article_title',
                                    'label'=>'Article Title',
                                    'rules'=>'trim|required'
                                  ],
                                  [
                                   'field'=>'article_body',
                                   'label'=>'Article Body',
                                   'rules'=>'trim|required'
                                  ],
                                  [
                                    'field'=>'article_image',
                                    'label'=>'Upload Image',
                                    'rules'=>'requieed'
                                   ]
                                ]
                               ]
];
?>