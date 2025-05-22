@foreach ($blogs as $blog)
    <tr class="table-row">
        <td>{{ $blog->post_name }}</td>
        <td>{{ Illuminate\Support\Str::limit($blog->post_short_description, 50, '...') }}</td>
        <td>{{ $blog->category }}</td>
        <td nowrap>
            <a class="title" target="_blank"
                @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
            href="{{ route('blog.details', $blog->slug_name) }}" @endif>Open
                Link</a>
        </td>
        <td>
            <img src="{{ asset($blog->post_image) }}" alt="{{ $blog->post_name }}"
                class="img-thumbnail">
        </td>
        <td class="text-center">
            @if ($blog->status == 1)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-secondary">Inactive</span>
            @endif
        </td>
        <td nowrap>
            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm"
                title="Edit">
                <i class="fas fa-edit pr-1"></i>Edit
            </a>
            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                    onclick="return confirm('Are you sure you want to delete this blog?')">
                    <i class="fas fa-trash-alt pr-1"></i>Delete
                </button>
            </form>
        </td>
    </tr>
@endforeach