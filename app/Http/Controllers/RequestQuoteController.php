<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequestQuoteRequest;
use App\Http\Requests\UpdateRequestQuoteRequest;
use App\Repositories\RequestQuoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RequestQuoteController extends AppBaseController
{
    /** @var  RequestQuoteRepository */
    private $requestQuoteRepository;

    public function __construct(RequestQuoteRepository $requestQuoteRepo)
    {
        $this->middleware('auth');
        $this->requestQuoteRepository = $requestQuoteRepo;
    }

    /**
     * Display a listing of the RequestQuote.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->requestQuoteRepository->pushCriteria(new RequestCriteria($request));
        $requestQuotes = $this->requestQuoteRepository->all();

        return view('request_quotes.index')
            ->with('requestQuotes', $requestQuotes);
    }

    /**
     * Show the form for creating a new RequestQuote.
     *
     * @return Response
     */
    public function create()
    {
        return view('request_quotes.create');
    }

    /**
     * Store a newly created RequestQuote in storage.
     *
     * @param CreateRequestQuoteRequest $request
     *
     * @return Response
     */
    public function store(CreateRequestQuoteRequest $request)
    {
        $input = $request->all();

        $requestQuote = $this->requestQuoteRepository->create($input);

        Flash::success('Request Quote saved successfully.');

        return redirect(route('requestQuotes.index'));
    }

    /**
     * Display the specified RequestQuote.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $requestQuote = $this->requestQuoteRepository->findWithoutFail($id);

        if (empty($requestQuote)) {
            Flash::error('Request Quote not found');

            return redirect(route('requestQuotes.index'));
        }

        return view('request_quotes.show')->with('requestQuote', $requestQuote);
    }

    /**
     * Show the form for editing the specified RequestQuote.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requestQuote = $this->requestQuoteRepository->findWithoutFail($id);

        if (empty($requestQuote)) {
            Flash::error('Request Quote not found');

            return redirect(route('requestQuotes.index'));
        }

        return view('request_quotes.edit')->with('requestQuote', $requestQuote);
    }

    /**
     * Update the specified RequestQuote in storage.
     *
     * @param  int              $id
     * @param UpdateRequestQuoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRequestQuoteRequest $request)
    {
        $requestQuote = $this->requestQuoteRepository->findWithoutFail($id);

        if (empty($requestQuote)) {
            Flash::error('Request Quote not found');

            return redirect(route('requestQuotes.index'));
        }

        $requestQuote = $this->requestQuoteRepository->update($request->all(), $id);

        Flash::success('Request Quote updated successfully.');

        return redirect(route('requestQuotes.index'));
    }

    /**
     * Remove the specified RequestQuote from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requestQuote = $this->requestQuoteRepository->findWithoutFail($id);

        if (empty($requestQuote)) {
            Flash::error('Request Quote not found');

            return redirect(route('requestQuotes.index'));
        }

        $this->requestQuoteRepository->delete($id);

        Flash::success('Request Quote deleted successfully.');

        return redirect(route('requestQuotes.index'));
    }
}
