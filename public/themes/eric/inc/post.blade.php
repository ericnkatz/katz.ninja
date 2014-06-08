<div class="post">
  <h2><a href="{{ wardrobe_url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
  <div class="date">{{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
  <div class="content">
    {{ $post->parsed_content }}
  </div>
</div>
