<x-jet-action-section>
    <x-slot name="title">
        {{ __('회원탈퇴') }}
    </x-slot>

    <x-slot name="description">
        {{ __('계정을 영구적으로 삭제합니다.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('계정이 삭제되면 모든 리소스와 데이터가 영구적으로 삭제됩니다. 계정을 삭제하기 전에 유지하려는 데이터 또는 정보를 다운로드하십시오.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('회원탈퇴') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('회원탈퇴') }}
            </x-slot>

            <x-slot name="content">
                {{ __('계정을 삭제 하시겠습니까? 계정이 삭제되면 모든 리소스와 데이터가 영구적으로 삭제됩니다. 계정을 영구적으로 삭제할 것인지 확인하려면 비밀번호를 입력하십시오.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('취소') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('회원탈퇴') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
