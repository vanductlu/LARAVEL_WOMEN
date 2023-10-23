<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> 
</head>
<body>
    <!-- Nút edit -->
    <a href="{{ route('women.edit', $woman) }}" class="btn btn-primary">Edit</a>

    <!-- Nút xóa (modal xác nhận) -->
    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $woman->id }}">
        Delete
    </button>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal-{{ $woman->id }}">
        <div class="modal-dialog">
            <form action="{{ route('women.destroy', $woman) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this woman?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>