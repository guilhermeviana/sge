<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/sysfinance/web/img/jcs.jpg" class="img-circle" alt="Jcs"/>
            </div>
            <div class="pull-left info">
                <p>Bem vindo!</p>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu JCS', 'options' => ['class' => 'header']],
                    ['label' => 'Clientes', 'icon' => 'users', 'url' => ['/cliente']],
                    ['label' => 'Parceiros', 'icon' => 'bank', 'url' => ['/parceiro']],
                    ['label' => 'Produtos',  'icon' => 'suitcase', 'url' => ['/produtos']],

                     ['label' => 'Tipos de Produtos',  'icon' => 'tag', 'url' => ['/tipo-produto']],
                                        ['label' => 'Emprestimos',  'icon' => 'random', 'url' => ['/emprestimo']],
                    
                     ['label' => 'BACKUP',  'icon' => 'cloud-download', 'url' => ['/backup/gerar']],
                    
                    

                   /* [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>
