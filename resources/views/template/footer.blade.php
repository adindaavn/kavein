<footer>
    <div class="w-full p-3 bg-white relative">
        <div class="w-full border rounded-b-3xl border-primary flex flex-col sm:flex-row gap-8 sm:gap-0 text-center sm:text-start items-center justify-between p-8">
            <div class="flex gap-10">
                <div>
                    <p class="text-sm sm:text-md font-bold mb-3">Products</p>
                    <p>Signatures</p>
                    <p>Hot Coffees</p>
                    <p>Cold Coffees</p>
                    <p>Beverages</p>
                </div>
                <div>
                    <p class="text-sm sm:text-md font-bold mb-3">Company</p>
                    <p>About Us</p>
                    <p>Contacts</p>
                </div>
            </div>
            <div class="flex flex-col justify-end">
                <div class="flex items-center gap-2 mb-3">
                    <input class="border-b border-primary w-full" type="email" name="email" id="email" placeholder="Subscribe our love letters" />
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="flex gap-6 mb-3 justify-center sm:justify-start">
                    <i class="fa-solid fa-phone"></i>
                    <i class="fa-solid fa-envelope"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    function toggleMobileMenu() {
        var menu = document.getElementById('mobile-menu');
        var menuButton = document.querySelector(
            "[aria-controls='mobile-menu']"
        );
        var isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

        if (isExpanded) {
            menu.style.display = 'none';
            document.getElementById('menu-closed').classList.add('hidden');
            document.getElementById('menu-open').classList.remove('hidden');
            menuButton.setAttribute('aria-expanded', 'false');
        } else {
            menu.style.display = 'block';
            document.getElementById('menu-open').classList.add('hidden');
            document.getElementById('menu-closed').classList.remove('hidden');
            menuButton.setAttribute('aria-expanded', 'true');
        }
    }

    var menuButton = document.querySelector("[aria-controls='mobile-menu']");

    menuButton.addEventListener('click', toggleMobileMenu);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var menu = document.getElementById('user-menu');
        var menuButton = document.getElementById('user-menu-button');

        menuButton.addEventListener('click', function() {
            var isExpanded = menu.getAttribute('aria-expanded') === 'true';
            menu.setAttribute('aria-expanded', !isExpanded);

            if (!isExpanded) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }

        });
    });
</script>
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }
</script>
<script>
    document.getElementById('modal-button').addEventListener('click', function() {
        document.getElementById('menu-modal').classList.remove('hidden');
    });

    document.getElementById('modal-close').addEventListener('click', function() {
        document.getElementById('menu-modal').classList.add('hidden');
    });
</script>
<script>
    $('#menu-modal').on('show.bs.modal', function(e) {
        console.log('menu')
        const btn = $(e.relatedTarget)
        const mode = btn.data('mode')
        const id = btn.data('id')
        const name = btn.data('name')
        const type = btn.data('type')
        const price = btn.data('price')
        const image = btn.data('image')
        const modal = $(this)
        if (mode == 'edit') {
            modal.find('.modal-title').text('Update Menu')
            modal.find('.submit').text('Update')
            modal.find('#name').val(name)
            modal.find('#type').val(type)
            modal.find('#price').val(price)
            modal.find('#old_image').val(image)
            modal.find('.img-preview').attr('src', '{{ asset("storage/menu-image")}}/' + image)
            modal.find('.modal-body form').attr('action', '{{ url("menu") }}/' + id)
            modal.find('#method').html('@method("PATCH")')
        } else {
            modal.find('.modal-title').text('Add Menu')
            modal.find('.submit').text('Add')
            modal.find('#name').val('')
            modal.find('#type').val('')
            modal.find('#price').val('')
            modal.find('#old_image').val('')
            modal.find('.img-preview').attr('src', '')
            modal.find('#method').html('')
            modal.find('.modal-body form').attr('action', '{{ url("menu")}}')
        }
    });
    // delete data
    $('.delete-data').click(function(e) {
        e.preventDefault()
        const data = $(this).closest('tr').find('td:eq(1)').text()
        Swal.fire({
                title: 'Data akan hilang!',
                text: `Apakah penghapusan data ${data} akan dilanjutkan?`,
                icon: 'warning',
                showDenyButton: true,
                confirmButtonText: 'Ya',
                denyButtonText: 'Tidak',
                focusConfirm: false
            })
            .then((result) => {
                if (result.isConfirmed) $(e.target).closest('form').submit()
                else swal.close()
            })
    })
</script>
<script>
    var closeButton = document.querySelector('.close-alert');
    var alertDiv = document.getElementById('alert');

    closeButton.addEventListener('click', function() {
        alertDiv.style.display = 'none';
    });
</script>
</body>

</html>