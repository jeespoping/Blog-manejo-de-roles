<?php

use App\Tag;
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('posts');
    	Post::truncate();
        Category::truncate();
    	Tag::truncate();

        $category = new Category;
        $category->name = "Electrodomesticos";
        $category->save();

        $category = new Category;
        $category->name = "Mano de obra";
        $category->save();

        $category = new Category;
        $category->name = "Aseo";
        $category->save();

        $category = new Category;
        $category->name = "Otros";
        $category->save();

        $post = new Post;
        $post->title = "No difference how many peaks you reach if there was no pleasure in the climb.";
        $post->url = str_slug($post->title);
        $post->excerpt = "Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.";
        $post->body = "<p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas.</p> <p> Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Laravel']));

		$post = new Post;
        $post->title = "You know, I'd rather argue with you, then laugh with anyone else.";
        $post->url = str_slug($post->title);
        $post->excerpt = "Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.";
        $post->body = "<p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue.</p><p> Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas.</p><p> Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->user_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'PHP']));

        $post = new Post;
        $post->title = "Everything in the universe has a rhythm, everything dances.";
        $post->url = str_slug($post->title);
        $post->excerpt = "Donec hendrerit magna vitae metus viverra tincidunt. Cras dolor lacus, placerat sed nulla in, egestas pharetra neque. Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.";
        $post->body = "<p>Donec hendrerit magna vitae metus viverra tincidunt. Cras dolor lacus, placerat sed nulla in, egestas pharetra neque.</p><p> Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. </p><p>Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.</p>";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 3;
        $post->user_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Vuejs']));

        $post = new Post;
        $post->title = "As human beings, we have a natural compulsion to fill empty spaces.";
        $post->url = str_slug($post->title);
        $post->excerpt = "Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. </p><p>Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.";
        $post->body = "<p>Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. </p><p> Cras laoreet pulvinar dapibus. </p><p>Nulla laoreet odio at nunc semper vestibulum. </p><p>Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.</p><p>Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. </p><p> Cras laoreet pulvinar dapibus. </p><p>Nulla laoreet odio at nunc semper vestibulum. </p><p>Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 4;
        $post->user_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Javascript']));

        $post = new Post;
        $post->title = "Music was my refuge. I could crawl into the space between the notes and curl my back to loneliness.";
        $post->url = str_slug($post->title);
        $post->excerpt = "Donec hendrerit magna vitae metus viverra tincidunt. Cras dolor lacus, placerat sed nulla in, egestas pharetra neque. Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque.";
        $post->body = "<p>Donec hendrerit magna vitae metus viverra tincidunt. Cras dolor lacus, placerat sed nulla in, egestas pharetra neque. </p><p>Sed sit amet aliquet erat. Integer nec mi convallis, condimentum odio quis, pharetra tellus. </p><p>Donec mollis libero in volutpat luctus. Cras laoreet pulvinar dapibus. Nulla laoreet odio at nunc semper vestibulum. Sed magna mauris, molestie eu ipsum et, pharetra egestas neque. </p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->user_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'TDD']));

        $post = new Post;
        $post->title = "Nature and Books belong to the eyes that see them.";
        $post->url = str_slug($post->title);
        $post->excerpt = "Nulla elit leo, tincidunt eu lacus ut, suscipit gravida tortor. Praesent feugiat, neque non pellentesque, velit sem hendrerit arcu, eu viverra ligula eu tortor. Suspendisse et cursus enim. Curabitur condimentum, sem quis pharetra hendrerit, leo odio rhoncus felis, sed posuere augue diam feugiat enim. Donec gravida non metus eu pretium. Ut sed sodales dolor, non vehicula enim. Nam fringilla blandit sem, eget vestibulum arcu porta sed. Mauris sit amet nulla id ante semper luctus id a enim.";
        $post->body = "<p>Nunc a enim interdum lectus accumsan sagittis. Ut mauris diam, efficitur vitae malesuada ut, tempus et mi. </p><p>Sed eget leo vehicula, dapibus arcu id, viverra erat. Proin auctor non nulla sed mollis. </p><p>Nulla elit leo, tincidunt eu lacus ut, suscipit gravida tortor. Praesent feugiat, neque non pellentesque, velit sem hendrerit arcu, eu viverra ligula eu tortor. Suspendisse et cursus enim. </p><p>Curabitur condimentum, sem quis pharetra hendrerit, leo odio rhoncus felis, sed posuere augue diam feugiat enim. Donec gravida non metus eu pretium. Ut sed sodales dolor, non vehicula enim. </p><p>Nam fringilla blandit sem, eget vestibulum arcu porta sed. Mauris sit amet nulla id ante semper luctus id a enim. Sed ac venenatis dolor. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ut congue nulla. Aenean elementum gravida convallis. Integer ac neque nisi. Sed ac magna in risus convallis laoreet. Pellentesque in orci ante.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 2;
        $post->user_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Eloquent']));

        $post = new Post;
        $post->title = "Democracy means simply the bludgeoning of the people by the people for the people.";
        $post->url = str_slug($post->title);
        $post->excerpt = "Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. ";
        $post->body = "<p> Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. </p><p>Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. </p><p>Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue. Mauris sem odio, rhoncus eget euismod sed, pellentesque sit amet felis. </p><p>Praesent dictum eleifend dui et efficitur. Nunc non orci in neque sodales semper. Etiam euismod volutpat lorem, vestibulum malesuada justo aliquet eget. </p><p>Nunc lacus ante, varius a euismod eu, finibus commodo erat. Curabitur tincidunt sit amet nunc id interdum. Aliquam augue nisi, venenatis vitae ex at, lobortis fringilla nibh. </p><p>Proin placerat enim vitae egestas eleifend. Aliquam quis orci dignissim, posuere nibh a, eleifend augue. </p><p>Cras quis metus nec tortor aliquet ullamcorper. Quisque varius porta metus, ut maximus dolor euismod nec. </p><p>Suspendisse sit amet feugiat turpis. Curabitur ut leo pulvinar, consectetur magna eu, feugiat purus. </p><p>Morbi hendrerit lectus turpis, a porttitor velit imperdiet id.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 4;
        $post->user_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Validation']));

    }
}
