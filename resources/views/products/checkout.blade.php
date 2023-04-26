<x-dashboard-layout>
    <section class="h-100" style="background-color: #f8f9fa; box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card pb-4" style="border-radius: 25px;">
                <div class="card-body p-4">
                  <div class="row">
                    <div class="col-lg-7">
                      <h5 class="mb-3"><a href="{{ url('/shop') }}" class="text-body"><i
                            class="bi bi-arrow-left me-2"></i>Poursuivre vos achats</a></h5>
                      <hr>
                      @if(session('cart'))
                          <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                              <p class="mb-1">Panier d'achats</p>
                              <p class="mb-0">Vous avez {{count(session('cart'))}} articles dans votre panier</p>
                            </div>
                          </div>
                          @if (session('error'))
                                  <div class="alert alert-danger alert-dismissible fade show mx-3" role="alert">
                                      <strong>Attention!</strong>
                                      {{ session('error') }}
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                          @endif
                          @foreach(session('cart') as $id => $item)
                            <div class="card card-article mb-3">
                              <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-4 d-flex justify-content-between align-items-center">
                                  <div class="col">
                                    <img src="{{ asset('img/' . $item['image']) }}" class="img-fluid rounded-3" alt="{{ $item['name'] }}">
                                  </div>
                                  <div class="col">
                                    <h6 class="text-muted">{{ $item['name'] }}</h6>
                                    <h6 class="text-black mb-3 mb-md-0">{{ $item['capacity'] }}</h6>
                                  </div>
                                  <div class="col">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h6 class="mb-3 mb-lg-0">{{ $item['price'] }} DH</h6>
                                    </div>
                                  </div>
                                  <div class="col d-flex justify-content-between align-items-center">
                                    <form action="{{ route('update.cart', $id) }}" class="d-flex gap-5 gap-md-2" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <input value="{{ $item['quantity'] }}" id="form1" name="quantity" value="1" type="number"
                                        class="form-control form-control-sm text-center mb-2 mb-md-0 quantity update-cart" style="width: 50%" min="1" max="10" />

                                      <button type="submit" class="btn btn-link"><i class="bi bi-pencil-square text-warning fw-boler"></i></button>
                                    </form>
                                    <form action="{{ route('cart.destroy', $id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-link"><i class="bi bi-x-lg text-danger fw-boler"></i></button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endforeach
                      @else
                        <h5 class="fw-bold nav-user">Votre panier est vide.</h5>
                      @endif
                    </div>
                    <div class="col-lg-5">
                      <div class="card text-white card-details rounded-3">
                        <div class="card-body">
                          <div class="">
                            <h4 class="mb-0 fw-bold text-center text-uppercase">Prix total</h4>
                          </div>
                          <img src="{{asset('img/help.png')}}" alt="" class="img-fluid m-auto">
                          <hr class="my-4 hr-cart">

                          <div class="d-flex justify-content-between mb-4 fw-bold">
                            <p class="mb-2 fs-5">Total</p>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                              @foreach(session('cart') as $id => $item)
                                  @php $total += $item['price'] * $item['quantity'] @endphp
                              @endforeach
                            @endif
                            <p class="mb-2 fs-4">{{$total}} DH</p>
                          </div>

                          <button type="button" class="btn btn-block btn-lg" style="background-color: #f29e26" {{ $total == 0 ? 'disabled' : '' }}>
                            <div class="d-flex justify-content-between">
                              <a href="{{route('checkout')}}" class="text-decoration-none text-dark">
                                <span class="me-2">Checkout</span>
                                <span>{{$total}} DH</span>
                              </a>
                            </div>
                          </button>

                        </div>
                      </div>

                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</x-dashboard-layout>
