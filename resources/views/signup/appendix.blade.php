                <div class="appendix" data-id="{{ $id }}">
                    {!! Form::label('appendices[' . $id . '][first_name]', 'Voornaam') !!}
                    {!! Form::text('appendices[' . $id . '][first_name]', '', ['required'=>'required', 'class'=>'form-control']) !!}
                    <br />

                    {!! Form::label('appendices[' . $id . '][last_name]', 'Achternaam') !!}
                    {!! Form::text('appendices[' . $id . '][last_name]', '', ['required'=>'required', 'class'=>'form-control']) !!}
                    <br />

                    {!! Form::label('appendices[' . $id . '][birthdate]', 'Geboortedatum') !!}
                    {!! Form::date('appendices[' . $id . '][birthdate]', '', ['required'=>'required', 'class'=>'form-control datepicker']) !!}
                    <br />
                      <span class="btn vague-orange-background remove" style="border-radius: 0; color: #fff">Verwijder bovenstaand aanhangsel</span>
                </div>