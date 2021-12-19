<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Lorem',
            'short' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros at tortor tempor rutrum sed non libero.',
            'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros at tortor tempor rutrum sed non libero. Proin pellentesque, enim eu pellentesque scelerisque, eros lectus euismod tortor, id ultrices nisi nulla eu velit. Integer luctus, nunc a iaculis accumsan, augue purus convallis turpis, eu molestie odio metus ac ligula. Morbi aliquam ac ante ut sodales. Donec mollis hendrerit tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae auctor lacus, a pellentesque nunc. Aenean ultricies, mauris vitae dictum bibendum, orci risus bibendum nisi, a tristique dui justo vel justo.',
        ]);

        Post::create([
            'title' => 'Ipsum',
            'short' => 'Aliquam lobortis tellus a massa feugiat mattis. Sed id efficitur ligula.',
            'text'  => 'Aliquam lobortis tellus a massa feugiat mattis. Sed id efficitur ligula. Pellentesque aliquam scelerisque augue, in pharetra lectus lacinia lacinia. Quisque lobortis magna at dui aliquet, ut vehicula neque condimentum. Donec imperdiet massa in libero sagittis facilisis ut non erat. Maecenas varius turpis lobortis, vulputate velit eu, aliquet libero. Sed elementum eleifend porttitor. Aenean id tempus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc non egestas tortor. In purus odio, ullamcorper et vehicula in, sodales et velit. Aliquam erat volutpat. Fusce ac odio sit amet odio rutrum dictum.',
        ]);

        Post::create([
            'title' => 'Dolor',
            'short' => 'Pellentesque nec sapien risus.',
            'text'  => 'Pellentesque nec sapien risus. Curabitur a erat enim. Nulla sapien neque, rutrum sed fringilla in, vulputate vel diam. Cras eu elit a diam maximus faucibus. Fusce vitae dui lectus. Proin ac scelerisque nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.',
        ]);

        Post::create([
            'title' => 'Sit Amet',
            'short' => 'Ut ac lacus ut urna tristique elementum ut sit amet mauris.',
            'text'  => 'Ut ac lacus ut urna tristique elementum ut sit amet mauris. Nulla et lorem hendrerit sem sagittis volutpat quis sed quam. Nulla dapibus molestie nulla nec aliquet. Nullam facilisis facilisis tincidunt. Donec a turpis velit. Etiam et leo vitae odio suscipit accumsan vitae ut neque. Praesent rhoncus dolor eu molestie faucibus. Donec cursus lorem eu turpis commodo fringilla. Aliquam semper enim turpis, at consequat libero rhoncus at. Nunc vitae tempus lacus, eget mollis mi. Sed commodo laoreet nisi, eget pellentesque ante.',
        ]);

        Post::create([
            'title' => 'Consectetur',
            'short' => 'Quisque et ante augue. Nam mattis viverra nunc nec tempor.',
            'text'  => 'Quisque et ante augue. Nam mattis viverra nunc nec tempor. Donec in luctus odio. Fusce vel ligula a justo cursus condimentum quis sed augue. Sed interdum, eros eget ullamcorper tristique, libero augue maximus felis, at malesuada neque lorem id arcu. Curabitur tempus, lacus in posuere iaculis, tortor velit placerat dolor, non consequat elit magna at augue. Mauris malesuada ipsum quis dignissim hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus eget ligula eu posuere. Maecenas congue quis nunc at dictum. Vestibulum a eros non arcu accumsan consectetur quis eu arcu. Etiam sem sapien, porta vel commodo et, dictum et erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed et facilisis urna. Pellentesque a odio sed arcu consequat blandit a vel ipsum.',
        ]);

        Tag::create([
            'tagname' => 'Lorem',
        ]);

        Tag::create([
            'tagname' => 'porta',
        ]);

        Tag::create([
            'tagname' => 'orci',
        ]);

        User::create([
            'name' => 'Chosen One',
            'email' => 'only@email.com',
            'password' => Hash::make('laravel1'),
        ]);

        foreach (Post::all() as $post) {
           $tags = \App\Models\Tag::inRandomOrder() -> take(rand(1,3)) -> pluck('id');
            $post -> tag() -> attach($tags);
        }
    }
}
